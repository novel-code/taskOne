<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <header id="home">
      <?php include "header.html" ?>
      <div class="hero">
        <div class="hero-text">
          <p class="header">Getting rid of cactus made easy.</p>

          <p class="sub-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s.
          </p>
          <div class="action-btn">
            <a href="#" class="call-to-action">Place Order</a>
          </div>
        </div>

        <div class="hero-image">
          <img src="lightPink.jpg" alt="" />
        </div>
      </div>
    </header>
    <section class="part2" id="about">
      <div class="about-div">
        <div class="about-us-header">
          <h2>About us</h2>
        </div>
        <div class="intro">
          <p>
            At NurtureLabs, we bring together remote tech teams, advanced
            product management skills and best in-class technologies to bring
            your ideas to life and deliver high impact results. Join our
            technology partner network and we'll provide you with continuous
            stream of work so that you can focus on what you do the best.
          </p>
        </div>
        <div class="team">
          <div>
            <h2>Team</h2>
          </div>
          <div class="team-photo">
            <img src="team.jpg" />
          </div>
        </div>
      </div>
    </section>
    <section class="part3" id="contact">
      <div class="contact-header">
        <h2>Contact</h2>
      </div>
      <div class="addressAndMap">
        <div class="address">
          <p>Address</p>
          <table>
            <tbody>
              <tr>
                <td>Street</td>
                <td>312/274, Krishna Court, Rk Mutt Road, Mylapore</td>
              </tr>
              <tr>
                <td>City</td>
                <td>Chennai</td>
              </tr>
              <tr>
                <td>State</td>
                <td>Tamil Nadu</td>
              </tr>
              <tr>
                <td>Zip Code</td>
                <td>600 004</td>
              </tr>
              <tr>
                <td>Phone number</td>
                <td><a href="tel:+04424 980289">04424 980289</a></td>
              </tr>
              <tr>
                <td>E-mail</td>
                <td>
                  <a href="mailto:dlpu8j06sgo@temporary-mail.net"
                    >dlpu8j06sgo@temporary-mail.net</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="map">
          <p>Map</p>
          <div class="googleMap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10740.848312522294!2d80.2008283441405!3d13.084917350996069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666bfc66380d%3A0x158c2ce2fe86c7bc!2sSundaram%20Medical%20Foundation!5e0!3m2!1sen!2sin!4v1628783339506!5m2!1sen!2sin"
              width="500"
              height="350"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <section id="form" class="part4">
      <div class="messageForm">
        <div class="messageHeader">
          <h2>Let's get in touch</h2>
        </div>
        <form>
          <table>
            <tbody>
              <tr>
                <td><label>Name</label></td>
                <td><input type="text" /></td>
              </tr>
              <tr>
                <td><label>Email</label></td>
                <td><input type="email" /></td>
              </tr>
              <tr>
                <td><label>How did you find us?</label></td>
                <td>
                  <select>
                    <option value="friends">friends</option>
                    <option value="SearchEngine">Search Engine</option>
                    <option value="Advertisement">Advertisement</option>
                    <option value="Other">Other</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><label>News Letter</label></td>
                <td><input class="tick" type="checkbox" />Yes, please</td>
              </tr>
              <tr>
                <td><label>Drop us a line.</label></td>
                <td><textarea placeholder="Your message"></textarea></td>
              </tr>
              <tr>
<td>              <button class="call-to-action" type="submit">Send it!</button>
</td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <?php include "footer.html" ?>
    </section>
  </body>
</html>
