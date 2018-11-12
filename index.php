<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="navbar">
      <!-- Right Navigation -->
      <div class="navbar-right hidden-xs hidden-sm">
        <a href="#aboutme" class="navbar-item navbar-link">About me</a>
        <a href="#myprojects" class="navbar-item navbar-link">My projects</a>
        <a href="#contactme" class="navbar-item navbar-link">Contact</a>
      </div>
  <!-- Dropdown appearing on mobile only -->
      <div class="navbar-item hidden-md hidden-lg">
        <div class="dropdown">
          <i class="fas fa-bars dropdown-toggle" data-toggle="dropdown" role="button"></i>
          <ul class="dropdown-menu dropdown-menu-right navbar-wagon-dropdown-menu">
            <li><a href="#aboutme">About me</a></li>
            <li><a href="#myprojects">My projects</a></li>
            <li><a href="#contactme">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="banner" style="background-image: url('images/bolivia.jpg');">
      <div class="banner-content">
        <h1>Hi, I'm Floriane Perrin test and I'm a front-end developer.</h1>
        <h3>I'm also a something and something and something and something else</h2>
      </div>
    </div>
    <div class="wrapper-beige">
      <div class="container">
        <h2 id='aboutme'>About me</h2>
        <h3>Who Am I ?</h3>
        <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.</p>
        <h3>Skills</h3>
        <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.</p>
        <h3>Interests</h3>
        <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statuit vel ex provinciis alimenta transferri conterminis, sed consularem Syriae Theophilum prope adstantem ultima metuenti multitudini dedit id adsidue replicando quod invito rectore nullus egere poterit victu.</p>
      </div>
    </div>
      <div class="container">
        <h2 id='myprojects'>My projects</h2>
        <h3 class='title'>K-buddy</h3>
        <div class='flex k-buddy'>
          <div class="description">
            <h3>What is it?</h3>
            <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statui</p>
            <h3>Skills</h3>
          </div>
          <div class="picture">
            <img src="images/k-buddy.jpg" class="align-right slide-in" alt="k-buddy">
          </div>
        </div>
        <h3 class='title'>Startrip</h3>
        <div class='flex startrip'>
          <div class="picture">
            <img src="images/k-buddy.jpg" class="align-left slide-in" alt="k-buddy">
          </div>
          <div class="description">
            <h3>What is it?</h3>
            <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statui</p>
            <h3>Skills</h3>
          </div>
        </div>
        <h3 class='title'>Color Silk</h3>
        <div class='flex colorsilk'>
          <div class="description">
            <h3>What is it?</h3>
            <p>Post haec Gallus Hierapolim profecturus ut expeditioni specie tenus adesset, Antiochensi plebi suppliciter obsecranti ut inediae dispelleret metum, quae per multas difficilisque causas adfore iam sperabatur, non ut mos est principibus, quorum diffusa potestas localibus subinde medetur aerumnis, disponi quicquam statui</p>
            <h3>Skills</h3>
          </div>
          <div class="picture">
            <img src="images/k-buddy.jpg" class="align-right slide-in" alt="k-buddy">
          </div>
        </div>
      </div>
      <div class="wrapper-beige">
        <div class='container'>
          <h2 id='contactme'>Contact me !</h2>
          <form name="htmlform" method="post" action="html_form_send.php">
            <table width="450px">
            </tr>
            <tr>
             <td valign="top">
              <label for="first_name">First Name *</label>
             </td>
             <td valign="top">
              <input type="text" class="form-control" id="first_name" placeholder="bob"></input>
             </td>
            </tr>
             
            <tr>
             <td valign="top"">
              <label for="last_name">Last Name *</label>
             </td>
             <td valign="top">
              <input type="text" class="form-control" id="last_name" placeholder="bob"></input>
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="email">Email Address *</label>
             </td>
             <td valign="top">
              <input type="text" class="form-control" id="email" placeholder="bob"></input>
             </td>
             
            </tr>
            <tr>
             <td valign="top">
              <label for="telephone">Telephone Number</label>
             </td>
             <td valign="top">
              <input type="text" class="form-control" id="telephone" placeholder="bob"></input>
             </td>
            </tr>
            <tr>
             <td valign="top">
              <label for="comments">Comments *</label>
             </td>
             <td valign="top">
              <input type="text" class="form-control" id="comments" placeholder="bob"></input>
             </td>
             
            </tr>
            <tr>
             <td colspan="2" style="text-align:center">
              <input type="submit" value="Submit">   ( <a href="http://www.freecontactform.com/html_form.php">HTML Form</a> )
             </td>
            </tr>
            </table>
          </form>
        </div>
      </div>


    <script src="js/myscripts.js"></script>
  </body>
</html>