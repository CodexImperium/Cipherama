<?php
include "cursor.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/lobbystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>GameLobby</title>
</head>
<body>
    <nav class="navbar ">
        <a href="#" class="navbar-brand"><img src="images/Logo.png" alt="Cipherama" class="logo"></a>
        <a  type="button" class="player-login" data-toggle="modal" data-target="#LoginModal">
            <img src="images/Avatar.png" alt="Avatar" class="avatar">
        </a>
    </nav>
    <div class="modal fade" id="LoginModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header modal-background">
                    <h4 class="modal-title">Welcome, Monty</h4>
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-background">
                    <a href="LogIn.php" class="logout">Logout</a>
                    <button type="button" class="btn btn-danger modal-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CreateLobby">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body modal-background">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h5>Number of Members</h5>
                    <div class="number-of-members list-functionality" style="width:200px;">
                        <select>
                            <option value="0">Select number:</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                            <option value="3">6</option>
                            <option value="4">7</option>
                            <option value="5">8</option>
                            <option value="6">9</option>
                        </select>
                    </div>
                    <h5>Number of Teams</h5>
                    <div class="number-of-members list-functionality" style="width:200px;">
                        <select>
                            <option value="0">Select number:</option>
                            <option value="2">4</option>
                            <option value="3">5</option>
                            <option value="4">6</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <a href="Team_Lobby.php" class="create-link">
                            <button type="button" class="btn btn-danger btn-block modal-create">Create</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-md-12 container-fluid margin-out no-background">
        <div class="row overall-container margin-out no-background">
            <div class="col col-md-6 carousel-container margin-out no-background">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/Game1.jpg" alt="GamePic1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Game2.jpg" alt="GamePic2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/Game3.jpg" alt="GamePic3" >
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

            </div>
            <div class="col col-md-6 margin-out panel-boxes">
                <div class="container-fluid">
                    <div class="row panel-container">
                        <div class="col col-md-6 player-view margin-out">
                            <div class="player-lobbies">
                                <h4>Team Lobbies</h4>
                                <div class="container-fluid lobby-rooms">
                                    <div class="lobby-overflow">
                                        <div class="container lobbies">
                                            <a href="Team_Lobby.php"><p>Montys lobby 1/8</p></a>
                                        </div>
                                        <div class="container lobbies">
                                            <a href="Team_Lobby.php"><p>Montys lobby 1/8</p></a>
                                        </div>
                                        <div class="container lobbies">
                                            <a href="Team_Lobby.php"><p>Montys lobby 1/8</p></a>
                                        </div>
                                        <div class="container lobbies">
                                            <a href="Team_Lobby.php"><p>Montys lobby 1/8</p></a>
                                        </div>
                                        <div class="container lobbies">
                                            <a href="Team_Lobby.php"><p>Montys lobby 1/8</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid create-button">
                                    <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#CreateLobby">CREATE</button>
                                </div>
                            </div>
                            <div class="active-players">
                                <h4>Active Players</h4>
                                <div class="container-fluid active-player-box margin-out">
                                        <div class="player-overflow">
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                            <div class="container players">
                                                <p>Monty</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 chatbox margin-out">
                                <h4>Messages</h4>
                                    <div class="container-fluid chatmessages">
                                    <div class="container-fluid chatmesagesssss">
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                        <div class="container messages">
                                            <p>Hello, How are you my friend?</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="form">
                                    <input type="text" class="form-control" placeholder="Enter message">
                                    <button class="btn btn-primary btn-md btn-block">SEND</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <script>
        var x, i, j, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("list-functionality");
        for (i = 0; i < x.length; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < selElmnt.length; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < s.length; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
    <script src="extensions/ajax-jquery-3.4.1.min.js"></script>
    <script src="extensions/popper%201.14.7.min.js"></script>
    <script src="extensions/bootstrap%204.3.1.min.js"></script>
</body>
</html>