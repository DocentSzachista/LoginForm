 var userClass = document.getElementsByClassName("user");
      var inputs = document.getElementsByClassName("login-input");
      var back = document.getElementsByClassName("back");
      var login = document.getElementsByClassName("login");
      var userTypeInput = document.getElementById("userChoice");
      var userDisplay = "inline-block";
      var inputDisplay = "none";

      function setDisplay() {
        var x = userClass.length;
        var y = inputs.length;
        for (var i = 0; i < y; i++) {
          inputs[i].style.display = inputDisplay;
        }
        for (var i = 0; i < x; i++) {
          userClass[i].style.display = userDisplay;
        }
      }
      setDisplay();

      function changeDisplay() {
        let t = inputDisplay;
        inputDisplay = userDisplay;
        userDisplay = t;
        setDisplay();
      }

      back[0].onclick = userClass[0].onclick = userClass[1].onclick = userClass[2].onclick = function () {
        changeDisplay();
        userType = this.value;
        userTypeInput.value = userType
      };