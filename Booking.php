<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  <section id="book">
    <style>
        #book {
        background-image: url('img/body 7/Design.png');
        background-repeat: no-repeat;
        background-attachment:scroll;
        background-size: 100% 100%;
        }
        @media (max-width : 820px) {
        .home{
        background-size: contain;

        }
        }
        </style>
    <div>
        <h1>Book ur program</h1>
        <p>Neque laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Dictum <br> fusce ut placerat orci nulla pellentesque dignissim enim sit. </p>
    </div>
        <form action="" method="POST">
          <div >
            <div id="program">
              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
              <label for="vehicle1"> 
                  <img src="/img/body 2/1.png" alt="">
              <article>
                  <h2>Program 1</h2>
                  <p>sint occaecat cupidatat non</p>
              </article>              </label><br>
              <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
              <label for="vehicle2">
                    <img src="/img/body 2/2.png" alt="">
                <article>
                    <h2>Program 2</h2>
                    <p>sint occaecat cupidatat non</p>
                </article>
              </label><br>
              <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
              <label for="vehicle3">
                    <img src="/img/body 2/3.png" alt="">
                <article>
                    <h2>Program 3</h2>
                    <p>sint occaecat cupidatat non</p>
                </article>
              </label><br> 
              </div>
              <div>         
            <div>
                <input type="text" name="name" class="b8-text" placeholder="Your Name" required="" />
            </div>
            <div>
                <input type="text" name="age" class="b8-text" placeholder="Age" required="" />
            </div>
            <div>
              <input type="email" name="" placeholder="Email" class="b8-text" id="" required>
            </div>
            <div>
                <textarea height="147px"  rows="4" name="message" class="b8-text" placeholder="Messages" required=""></textarea>
            </div>
            <div>
                <button type="submit">BOOK</button>
            </div>
        </form>
</section>
</body>
</html>