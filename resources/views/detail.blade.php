<!DOCTYPE html>
<html lang="en" >

<head>

<meta charset="UTF-8">
<title>WhatsApp - Web HTML Template</title>
<link rel="shortcut icon" type="image/x-icon" href="#" />
<style>
/* ------ GENERAl LAYOUT ------ */
* {
    font-family: 'Roboto', sans-serif;
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    background: #dbdbdb;
}

i {
    width: 60px;
    margin: auto;
}

/* ------ FONTS ------ */
.font-name {
    color: #000000;
    font-size: 1em;
    font-weight: inherit;
    padding-bottom: 3px;
}

.font-preview {
    color: #444444;
    font-size: 0.9em;
    font-weight: inherit;
}

.font-online {
    color: #777777;
    font-size: 0.8em;
    font-weight: inherit;
}

.green-background {
    background: #009688;
    height: 130px;
    width: 100%;
    position: fixed;
    top: 0;
    z-index: -100;
}

.wrap {
    display: flex;
    height: 100vh;
    min-width: 600px;
    max-width: 1200px;
    margin: auto;
    box-shadow: 0 2px 2px #aaaaaa;
}

/* ------ LEFT SIDE ------ */
.left {
    width: 400px;
}

.profile {
    width: 100%;
    height: 60px;
    background: #eeeeee;
    border-right: 1px solid #dbdbdb;
    display: flex;
    justify-content: space-between;
}

.profile img {
    width: 40px;
    height: 40px;
    margin: 10px;
    border-radius: 50%;
}

.icons {
    color: #777777;
    display: flex;
}

.wrap-search {
    width: 100%;
    height: 45px;
    background: #fbfbfb;
    display: flex;
}

.search {
    width: calc(100% - 20px);
    height: 30px;
    background: #ffffff;
    margin: auto;
    border: 1px solid #eeeeee;
    border-radius: 5px;
    display: flex;
}

.search i {
    widht: 60px;
}

.search i, .wrap-message i {
    color: #aaaaaa;
    text-align: center;
}

.input-search {
    width: 100%;
    border: none;
}

.input-search:focus {
    outline: none;
}

.contact-list {
    background-color: #ffffff;
    width: 100%;
    height: calc(100% - 105px);
    overflow-y: auto;
}

.contact, .active-contact, .new-message-contact {
    height: 70px;
    background-color: #ffffff;
    display: flex;
}

.contact img, .active-contact img, .new-message-contact img {
    width: 50px;
    height: 50px;
    margin: 10px;
    border-radius: 50%;
}

.active-contact {
    background-color: #ebebeb;
}

.contact:hover, .new-message-contact:hover {
    background-color: #f5f5f5;
}

.new-message-contact {
	font-weight: bold;
}

.contact-preview {
    width: 100%;
    height: 70px;
    border-bottom: 1px solid #eeeeee;
    display: flex;
    overflow: hidden;
}

.contact-text {
    height: 40px;
    margin: auto 0;
    overflow: hidden;
}

.contact-time {
    width: 55px;
    color: rgba(0,0,0,0.4);
    font-size: 0.8em;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #eeeeee;
}

.new-message {
    background: #09d261;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    margin: auto;
    flex-direction: column;
    color: white;
}

.new-message p {
	margin: auto;
}

/* ------ RIGHT SIDE ------ */
.right {
    min-width: calc(100% - 400px);
}

.chat-head {
    background-color: #eeeeee;
    width: 100%;
    height: 60px;
    display: flex;
}

.chat-head img {
    width: 40px;
    height: 40px;
    margin: 10px;
    border-radius: 50%;
}

.chat-head i {
    color: #aaaaaa;
    width: 60px;
    margin: auto;
    text-align: center;
}

#close-contact-information {
    display: none;
}

.chat-name {
    width: 100%;
    margin: auto;
}

.wrap-chat {
    height: calc(100% - 120px);
    display: flex;
}

.chat {
    background-color: #e5ddd5;
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/background.png);
    width: 100%;
    padding: 0px 10%;
    padding-top: 7px;
    overflow-y: auto;
}

.information {
    width: 100%;
    position: relative;
    background: #f7f7f7;
    display: none;
    flex-direction: column;
    overflow: auto;
}

.information div {
    background: #ffffff;
    padding: 10px;
    margin-bottom: 20px;
}

.information img {
    width: 200px;
    height: 200px;
    margin: 20px auto;
    border-radius: 50%;
    float: left;
}

.information h1 {
    color: #009688;
    font-size: 14px;
    margin-bottom: 5px;
}

.listGroups {
    display: flex;
    margin: 0px !important;
}

.listGroups img {
    width: 40px;
    height: 40px;
    margin: 0px 10px 0px 0px;
}

.listGroups p {
    margin: auto 0px;
}

/* ------ CHAT ------ */
.chat-bubble {
    border-radius: 7px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.05);
    padding: 5px 7px;
    width: 350px;
    max-width: 100%;
    position: relative;
}

.you {
    background: #ffffff;
    margin: 0px auto 10px 0px;
}

.me {
    background: #dcf8c6;
    margin: 0px 0px 10px auto;
}

.your-mouth {
    width: 0;
    height: 0;
    border-bottom: 10px solid white;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: 10px;
    left: -10px;
}

.my-mouth {
    width: 0;
    height: 0;
    border-bottom: 10px solid #dcf8c6;
    border-right: 10px solid transparent;
    position: absolute;
    bottom: 10px;
    left: 100%;
}

.content {
    margin: 0.5em 0;
    line-height: 120%;
    font-size: 0.9em;
}

.content img {
    width: 100%;
}

.time {
    color: rgba(0,0,0,0.4);
    font-size: 0.6em;
    text-align: right;
    margin-top: -10px;
}

.pink {
    color: #EE33AA;
}

.green {
    color: #44FF66;
}

.orange {
    color: #FF8811;
}

.wrap-message {
    width: 100%;
    height: 60px;
    background: #f1f1f1;
    display: flex;
}

.message {
    width: 100%;
    height: 45px;
    background: #ffffff;
    margin: auto;
    border: 1px solid #eeeeee;
    border-radius: 5px;
    display: flex;
}

.input-message {
    width: 100%;
    margin: 0px 10px;
    border: none;
}

.input-message:focus {
    outline: none;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 70px;
  width: 80%;
  font-weight: 900;
  color: #009688;
  text-align: center;

}
.button {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 70px;



}

/* ------ SCROLLBAR ------ */

body::-webkit-scrollbar, .contact-list::-webkit-scrollbar, .chat::-webkit-scrollbar, .information::-webkit-scrollbar {
    width: 0.4em;
    height: 0.4em;
}

body::-webkit-scrollbar-thumb, .contact-list::-webkit-scrollbar-thumb, .chat::-webkit-scrollbar-thumb, .information::-webkit-scrollbar-thumb {
    background-color: rgba(0,0,0,0.2);
}

/* ------ MEDIA QUERIES ------ */
@media (min-width: 1200px) {
    .wrap {
        margin-bottom: 2vh;
        margin-top: 25px;
        height: calc(98vh - 25px);
    }
}

@media (max-width: 600px) {
    .wrap {
        height: calc(100vh - 0.4em);
    }
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <html lang="en">
<head>
		<meta charset="UTF-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Title</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="https://use.fontawesome.com/1c6f725ec5.js"></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
		<div class="green-background"></div>
        <div class="container">
  <div class="row">
    <div class="col-sm-12 green-background">

    </div>
    <div class="col-sm-6 align-self-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="img-responsive center">
      <h1 class="center"><b>Whatsapp API</b></h1>
    </div>
    <div class="col-sm-6 align-self-center">
   <div id="app">
        <style>
            .mt2{
                margin-top: 2%;
            }
        </style>
        <main>
            <div class="container" >
                        <div class="card card-default">
                            <div class="card-body text-center">
                                <div class="card-header">
                                   Enter your Details
                                </div>
                                <form method="post" action="{{route('paytm.payment')}}">
                                    @csrf
                                    <label class="form-control">Enter Full name</label>
                                    <input type="text" name="username" placeholder="Name" value=""class="form-control"/>
                                    <label class="form-control">Enter Phone</label>
                                    <input type="text" name="phone" placeholder="+91 xxxxxxxxxxx" value=""class="form-control"/>
                                    <label class="form-control">Enter Email</label>
                                    <input type="text" name="email" placeholder="xxx@gmail.com" value=""class="form-control"/>
                                    <button type="submit" class="btn btn-primary mt2">Pay</button>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
  </div>
</div>

</body>
</html>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

      <script id="rendered-js" >
//contacts
var WhatsApp = function (app) {
  function Contact(name, img, online) {
    this.id = contactList.length;
    this.name = name;
    this.img = img;
    this.online = online;
    this.messages = new Array();
    this.newmsg = 0;
    this.groups = new Array();

    contactList.push(this);
  }

  Contact.prototype.addMessage = function (msg) {
    this.messages.push(msg);
  };

  Contact.prototype.addGroup = function (group) {
    this.groups.push(group);
  };

  appContacts = Contact;
  return appContacts;
}(WhatsApp || {});

//groups
var WhatsApp = function (app) {
  function Group(name, img) {
    this.id = contactList.length;
    this.name = name;
    this.img = img;
    this.members = new Array();
    this.messages = new Array();
    this.newmsg = 0;

    contactList.push(this);
  }

  Group.prototype.addMember = function (contact) {
    this.members.push(contact);
  };

  Group.prototype.addMessage = function (msg) {
    this.messages.push(msg);
  };

  appGroups = Group;
  return appGroups;

}(WhatsApp || {});

//messages
var WhatsApp = function (app) {
  function Message(text, name, time, type, group) {
    this.text = text;
    this.name = name,
    this.time = time;
    this.type = type;
    this.group = group;
  }

  appMessages = Message;
  return appMessages;
}(WhatsApp || {});

//subject
/**
 * Created by oflox on 26.09.2020.
 */
var WhatsApp = function (app) {

  function Subject() {
    this.observers = [];
  };

  Subject.prototype.subscribe = function (item) {
    this.observers.push(item);
  };

  Subject.prototype.unsubscribeAll = function () {
    this.observers.length = 0;
  };

  Subject.prototype.notifyObservers = function () {
    this.observers.forEach(elem => {elem.notify();});
  };

  app.Subject = Subject;
  return app;

}(WhatsApp || {});

//model
/**
* Created by oflox on 26.09.2020.
*/
var currentChat;
var contactList = new Array();

var WhatsApp = function ToDoModel(app) {
  var subject = new app.Subject();

  var Model = {
    start: function () {
      $.getJSON("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contacts2.json", function (data) {
        for (var i = 0; i < data.elements.length; i++) {if (window.CP.shouldStopExecution(0)) break;
          var e = data.elements[i];

          if (e.online == undefined) {
            var group = new appGroups(e.name, e.img);
            for (var j = 0; j < e.members.length; j++) {if (window.CP.shouldStopExecution(1)) break;
              group.addMember(contactList[e.members[j].contact]);
              contactList[e.members[j].contact].addGroup(group);
            }window.CP.exitedLoop(1);
            for (var j = 0; j < e.messages.length; j++) {if (window.CP.shouldStopExecution(2)) break;
              var m = e.messages[j];
              var message = new appMessages(m.text, m.name, m.time, m.type, true);
              group.addMessage(message);
            }window.CP.exitedLoop(2);
          } else
          {
            var contact = new appContacts(e.name, e.img, e.online);
            for (var j = 0; j < e.messages.length; j++) {if (window.CP.shouldStopExecution(3)) break;
              var m = e.messages[j];
              var message = new appMessages(m.text, m.name, m.time, m.type, false);
              contact.addMessage(message);
            }window.CP.exitedLoop(3);
          }
        }window.CP.exitedLoop(0);
        subject.notifyObservers();
      });
    },
    writeMessage: function () {
      var msg = new appMessages($(".input-message").val(), "", new Date().getHours() + ":" + new Date().getMinutes(), true);
      WhatsApp.View.printMessage(msg);
      currentChat.addMessage(msg);
      $(".input-message").val("");
      $("#" + currentChat.id).addClass("active-contact");
      subject.notifyObservers();
    },
    getMessage: function (text, id, name) {
      if (name == undefined) {
        var msg = new appMessages(text, contactList[id].name, new Date().getHours() + ":" + new Date().getMinutes(), false, false);
      } else
      {
        var msg = new appMessages(text, name, new Date().getHours() + ":" + new Date().getMinutes(), false, true);
      }
      contactList[id].addMessage(msg);
      contactList[id].online = new Date().getHours() + ":" + new Date().getMinutes();

      if (contactList[id] == currentChat) {
        WhatsApp.View.printMessage(msg);
        WhatsApp.View.printContact(contactList[id]);
      } else
      {
        contactList[id].newmsg++;
        WhatsApp.View.printContact(contactList[id]);
      }
    },
    register: function (...args) {
      subject.unsubscribeAll();
      args.forEach(elem => {
        subject.subscribe(elem);
      });
    } };

  app.Model = Model;
  return app;

}(WhatsApp || {});

//view
/**
 * Created by oflox on 02.01.2017.
 */
var first = true;

var WhatsApp = function ToDoView(app) {
  var view = {
    printContact: function (c) {
      $("#" + c.id).remove();
      var lastmsg = c.messages[c.messages.length - 1];

      if (c.newmsg == 0) {
        var html = $("<div class='contact' id='" + c.id + "'><img src='" + c.img + "' alt='profilpicture'><div class='contact-preview'><div class='contact-text'><h1 class='font-name'>" + c.name + "</h1><p class='font-preview'>" + lastmsg.text + "</p></div></div><div class='contact-time'><p>" + lastmsg.time + "</p></div></div>");
      } else
      {
        var html = $("<div class='contact new-message-contact' id='" + c.id + "'><img src='" + c.img + "' alt='profilpicture'><div class='contact-preview'><div class='contact-text'><h1 class='font-name'>" + c.name + "</h1><p class='font-preview'>" + lastmsg.text + "</p></div></div><div class='contact-time'><p>" + lastmsg.time + "</p><div class='new-message' id='nm" + c.id + "'><p>" + c.newmsg + "</p></div></div></div>");
      }

      var that = c;
      $(".contact-list").prepend(html);
      WhatsApp.Ctrl.addClick(html, that);
    },
    printChat: function (cg) {
      WhatsApp.View.closeContactInformation();
      $(".chat-head img").attr("src", cg.img);
      $(".chat-name h1").text(cg.name);
      if (cg.members == undefined) {
        $(".chat-name p").text("zuletzt online um " + cg.online);
        // Nachrichten konfigurieren
        $(".chat-bubble").remove();
        for (var i = 0; i < cg.messages.length; i++) {if (window.CP.shouldStopExecution(4)) break;
          WhatsApp.View.printMessage(cg.messages[i]);
        }window.CP.exitedLoop(4);
        currentChat = cg;
      } else
      {
        var listMembers = "";
        for (var i = 0; i < cg.members.length; i++) {if (window.CP.shouldStopExecution(5)) break;
          listMembers += cg.members[i].name;
          if (i < cg.members.length - 1) {
            listMembers += ", ";
          }
        }window.CP.exitedLoop(5);
        $(".chat-name p").text(listMembers);
        // Nachrichten konfigurieren
        $(".chat-bubble").remove();
        for (var i = 0; i < cg.messages.length; i++) {if (window.CP.shouldStopExecution(6)) break;
          WhatsApp.View.printMessage(cg.messages[i]);
        }window.CP.exitedLoop(6);
        currentChat = cg;
      }
    },
    printMessage: function (gc) {
      if (gc.group) {
        if (gc.type) {
          $(".chat").append("<div class='chat-bubble me'><div class='my-mouth'></div><div class='content'>" + gc.text + "</div><div class='time'>" + gc.time + "</div></div>");
        } else
        {
          $(".chat").append("<div class='chat-bubble you'><div class='your-mouth'></div><h4>" + gc.name + "</h4><div class='content'>" + gc.text + "</div><div class='time'>" + gc.time + "</div></div>");
        }
      } else
      {
        if (gc.type) {
          $(".chat").append("<div class='chat-bubble me'><div class='my-mouth'></div><div class='content'>" + gc.text + "</div><div class='time'>" + gc.time + "</div></div>");
        } else
        {
          $(".chat").append("<div class='chat-bubble you'><div class='your-mouth'></div><div class='content'>" + gc.text + "</div><div class='time'>" + gc.time + "</div></div>");
        }
      }
    },
    showContactInformation: function () {
      $(".chat-head i").hide();
      $(".information").css("display", "flex");
      $("#close-contact-information").show();
      if (currentChat.members == undefined) {
        $(".information").append("<img src='" + currentChat.img + "'><div><h1>Name:</h1><p>" + currentChat.name + "</p></div><div id='listGroups'><h1>Gemeinsame Gruppen:</h1></div>");
        for (var i = 0; i < currentChat.groups.length; i++) {if (window.CP.shouldStopExecution(7)) break;
          html = $("<div class='listGroups'><img src='" + currentChat.groups[i].img + "'><p>" + currentChat.groups[i].name + "</p></div>");
          $("#listGroups").append(html);
          $(html).click(function (e) {
            for (var i = 0; i < contactList.length; i++) {if (window.CP.shouldStopExecution(8)) break;
              if ($(currentChat).find("p").text() == contactList[i].name) {
                $(".active-contact").removeClass("active-contact");
                $("#" + contactList[i].id).addClass("active-contact");
                WhatsApp.Groups.printChat(contactList[i]);
              }
            }window.CP.exitedLoop(8);
          });
        }window.CP.exitedLoop(7);
      } else
      {
        $(".information").append("<img src='" + currentChat.img + "'><div><h1>Name:</h1><p>" + currentChat.name + "</p></div><div id='listGroups'><h1>Mitglieder:</h1></div>");
        for (var i = 0; i < currentChat.members.length; i++) {if (window.CP.shouldStopExecution(9)) break;
          html = $("<div class='listGroups'><img src='" + currentChat.members[i].img + "'><p>" + currentChat.members[i].name + "</p></div>");
          $("#listGroups").append(html);
          $(html).click(function (e) {
            for (var i = 0; i < contactList.length; i++) {if (window.CP.shouldStopExecution(10)) break;
              if ($(currentChat).find("p").text() == contactList[i].name) {
                $(".active-contact").removeClass("active-contact");
                $("#" + contactList[i].id).addClass("active-contact");
                WhatsApp.Contacts.printChat(contactList[i]);
              }
            }window.CP.exitedLoop(10);
          });
        }window.CP.exitedLoop(9);
      }
    },
    closeContactInformation: function () {
      $(".chat-head i").show();
      $("#close-contact-information").hide();
      $(".information >").remove();
      $(".information").hide();
    },

    //Observer-Methode
    notify: function () {
      if (first) {
        first = false;
        for (var i = 0; i < contactList.length; i++) {if (window.CP.shouldStopExecution(11)) break;
          WhatsApp.View.printContact(contactList[i]);
          currentChat = contactList[i];
        }window.CP.exitedLoop(11);
        first = false;
      } else
      {
        WhatsApp.View.printContact(currentChat);
      }
    } };


  app.View = view;
  return app;

}(WhatsApp);

//controller
/**
 * Created by oflox on 26.09.2020.
 */
var start = true;

var WhatsApp = function ToDoCtrl(app) {

  $(document).ready(function () {
    app.Model.start();
  });

  var Ctrl = {
    addClick: function (html, that) {
      $(html).click(function (e) {
        $(".active-contact").removeClass("active-contact");
        $(this).addClass("active-contact");
        $(this).removeClass("new-message-contact");
        $("#nm" + that.id).remove();
        that.newmsg = 0;
        WhatsApp.View.printChat(that);
      });
    },

    //Observer-Methode
    notify: function () {
      if (start) {
        $(".input-message").keyup(function (ev) {
          if (ev.which == 13 || ev.keyCode == 13) {
            app.Model.writeMessage();
          }
        });

        $("#show-contact-information").on("click", function () {
          WhatsApp.View.showContactInformation();
        });

        $("#close-contact-information").on("click", function () {
          WhatsApp.View.closeContactInformation();
        });
        start = false;
      }
    } };

  app.Ctrl = Ctrl;
  return app;

}(WhatsApp);

WhatsApp.Model.register(WhatsApp.View, WhatsApp.Ctrl);
//# sourceURL=pen.js
    </script>



</body>

</html>

