<?php
//sprawdzamy czy kliknięto buttona zaloguj się
if(isset($_POST['login-submit']))
{
    //odwołujemy się do skryptu z bazą danych
    require_once 'dbConnect.inc.php';
    //pobieramy input użytkownika
    //mail/login
    $mailuid = $_POST['login'];
    //hasło
    $password = $_POST['password'];
    //typ użytkownika
    $user=$_POST['userType'];
    //sprawdzamy czy jest którekolwiek z pól puste
    if(empty($mailuid ) || empty($password))
    {
        //odsyłamy do strony z logowaniem
        header("Location: ../../index.php?error=emptyfields");
        //zabijamy dalsze wykonywanie się skryptu
        exit();
    }
    else
    {
        //przygotowujemy statement z SQL'a
        //tu dobrze by było zawrzeć funckję
           $sql= checkIfMail($mailuid); 
      
        //inicjalizacja komendy do SQL'a, zwraca obiekt na którym możemy użyć mysqli_stmt_init
        $stmt= mysqli_stmt_init( $conn );
        //sprawdzamy czy komenda jest przygotowana do wykonania 
        if( !mysqli_stmt_prepare( $stmt, $sql ) )
        {
            //odsyłamy z powrotem do indexu z informacją o błędzie połączenia z bazą.
           header( "Location: ../index.php?error=wrongdatabase" );
           exit();
        }
        else 
       {
            //wiążemy zmienne z preparowaną komendą SQL'a jako parametry.
                mysqli_stmt_bind_param( $stmt, "s", $mailuid );
            //wykonujemy komendę
            mysqli_stmt_execute( $stmt );
            //wynik wykonanej komendy
            $result= mysqli_stmt_get_result( $stmt );
            //sprowadź wiersz do postaci tablicy asocjacyjnej i sprawdź czy powstała 
            if( $row= mysqli_fetch_assoc( $result ) )
            {
                //sprawdzenie hasła z bazą danych (przetwarza hash automatycznie by porównać)
                $pwdCheck= password_verify( $password, $row['Password'] );
                if($pwdCheck==false)
                {
                    header("Location: ../../index.php?error=wrongpwd");
                     exit();
                }
                //kreacja zmiennej sesji która będzie pamiętała, że jesteśmy zalogowani
                else if($pwdCheck==true)
                {
                    session_start();
                    $_SESSION['userId']=$row['id'];
                    $_SESSION['userName']=$row['username'];
                    $_SESSION['time']=time();
                    // tu kreacja obiektu użytkownika z odpowiednimi parametrami.
                      header("Location: ../../main.php?login=success");
                      
                     exit();
                }
            }
            else
            {
                header("Location: ../../index.php?error=nouser");
           exit();
            }
        }
    }
}

 else 
{

    header("Location: ../index.php");
    exit();
    
}

function checkIfMail($login)
{
    if(filter_var($login, FILTER_VALIDATE_EMAIL))
    {
        // statement z SQL'a i cała ta robota dla maili
        return  "SELECT * FROM uczniowie WHERE email=?;"; 
    }
    else
    {
        // robota dla
        return "SELECT * FROM uczniowie WHERE username=?";
    }
}

 
?>