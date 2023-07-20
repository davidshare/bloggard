<?php

/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bloggard App
 */

get_header();
?>
<main class="main">
  <!-- Main content here -->
  <section class="about-us">
    <article class="about-us__content">
      <header class="about-us__content__header">
        <sub class="about-us__content__subtitle">About us</sub>
        <h2 class="about-us__content__title">Empowering you through tech training that works</h2>
      </header>
      <p class="about-us__content__description">
        At Techskills Cafe, we are committed to helping people of all backgrounds and skill levels get involved in
        technology and grow their skills, businesses, and earning potential.
        <br />
        <br />
        We believe that everyone deserves to create and be a part of the future, and we know that technology is one of
        the most versatile tools for influencing growth. That's why we're dedicated to providing you with the right
        materials for accelerated learning, a supportive community to consult when you need help, and training and
        courses to help you learn or improve your skills.
      </p>
    </article>
    <div class="about-us__grid">
      <article class="about-us__grid__item box1">
        <header class="title">
          <h2>Design &amp; Branding</h2>
        </header>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
          ullamcorper mattis,
          pulvinar dapibus leo.</p>
        <a href="#link-to-more" class="btn">Read more &#8594;</a>
      </article>
      <article class="about-us__grid__item box2">
        <header class="title">
          <h2>Introduction to computers</h2>
        </header>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
          ullamcorper mattis,
          pulvinar dapibus leo.</p>
        <a href="#link-to-more" class="btn">Read more &#8594;</a>
      </article>
      <article class="about-us__grid__item box3">
        <header class="title">
          <h2>Digital Marketting</h2>
        </header>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
          ullamcorper mattis,
          pulvinar dapibus leo.</p>
        <a href="#link-to-more" class="btn">Read more &#8594;</a>
      </article>
      <article class="about-us__grid__item box4">
        <header class="title">
          <h2>Software Development</h2>
        </header>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
          ullamcorper mattis,
          pulvinar dapibus leo.</p>
        <a href="#link-to-more" class="btn">Read more &#8594;</a>
      </article>
    </div>
  </section>
  <section class="why-choose-us container">
    <h2 class="why-choose-us__heading">Why should you choose us?</h2>
    <p class="why-choose-us__description">
      We believe that the real superstars of this world are those who are committed to improving themselves constantly
      and implementing what they learn; so we take learning seriously.
      <br />
      You are brave for wanting to take this step, and we will not disappoint you.
      <br />
      So here's why you should choose us:
    </p>
    <div class="why-choose-us__grid">
      <article class="why-choose-us__grid__item box1">
        <header class="why-choose-us__grid__item__title">
          <h2>We know our stuff</h2>
        </header>
        <p class="why-choose-us__grid__item__description">Our team consists of experienced experts who go through a
          rigorous process of learning.
          <br /> train so that the content they create is industry standard and also so that they can present it in a
          way that makes it possible for even a dummy to learn from and become a professional.
        </p>
      </article>
      <article class="why-choose-us__grid__item box2">
        <header class="why-choose-us__grid__item__title">
          <h2>Practical and result-driven</h2>
        </header>
        <p class="why-choose-us__grid__item__description">There's no time to waste. Our resources are designed to get
          you up and running in the smallest possible time.
          <br />We adopt a project-based learning approach where you start learning with real life examples and
          projects so that you become a professional in no time.
        </p>
      </article>
      <article class="why-choose-us__grid__item box3">
        <header class="why-choose-us__grid__item__title">
          <h2>We make it about you</h2>
        </header>
        <p class="why-choose-us__grid__item__description">We understand that different people prefer different
          learning styles and paces.
          <br />Our team first tries to understand the best approach for you to learn faster, then tailors the process
          to suite you. We make the learning about you.
        </p>
      </article>
      <article class="why-choose-us__grid__item box4">
        <header class="why-choose-us__grid__item__title">
          <h2>Quality and affordable learning</h2>
        </header>
        <p class="why-choose-us__grid__item__description">We know that not everyone can afford to pay huge sums for
          courses. So what we offer you is affordable.
          <br />Guess what? We have lots of free stuff for you that can also take you from novice to professional.
        </p>
      </article>
      <article class="why-choose-us__grid__item box4">
        <header class="why-choose-us__grid__item__title">
          <h2>We show you how to profit from your skill</h2>
        </header>
        <p class="why-choose-us__grid__item__description">We believe your learning is not complete until you can make
          money from it. So one of our priorities is taking you through a process that makes your learning financially
          profitable.</p>
      </article>
    </div>
  </section>
  <section class="contact">
    <p class="contact__subhead">We are happy to hear from you.</p>
    <h2 class="contact__title">Contact us</h2>
    <div class="contact__content">
      <div class="contact__content__image" role="img" aria-label="Description of image for SEO">
      </div>
      <form class="contact__content__form" action="path-to-your-script" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" aria-label="Enter your name" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" aria-label="Enter your email" required />

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Enter the subject" aria-label="Enter the subject" required />

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Enter your message" aria-label="Enter your message" required></textarea>

        <button type="submit" value="Submit" class="get-started-link">Send Message</button>
      </form>
    </div>
  </section>
</main>