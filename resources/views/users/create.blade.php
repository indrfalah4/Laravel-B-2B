<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
        font-family: calibri;
        text-align: center;
        }
        * {box-sizing: border-box;}

        input[type=text], select, textarea {
        font-family: ;
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        }

        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
        </style>

    <title>Contact Us</title>
</head>
<body>
    <h3>Contact Us</h3>
    <div class="container">
    <form action="{{URL::to('/adduser')}}" method="POST">
        {!! csrf_field() !!}
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
        
        <label for="lname">Email Address</label>
        <input type="text" id="email" name="email" placeholder="Your last name..">

        <label for="lname">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="Your last name..">

        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Send Message">
    </form>
    </div>
</body>
</html>
