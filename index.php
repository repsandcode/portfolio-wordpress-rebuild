<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<?php get_header(); ?>


<body id="body" class="antialiased tracking-wide text-xl md:text-2xl text-gray-100 font-light bg-gray-800">









  <div class="container max-w-full lg:pt-24">

  <section class="p-3 md:p-10 lg:px-36 mb-10">
    <div class="pb-10 lg:grid lg:grid-cols-2 lg:grid-rows-1 lg:gap-10 lg:content-center">
      
      <div id="tree" class="w-3/4 md:w-7/12 lg:w-full mx-auto">
        <img src="<?php echo get_theme_file_uri('/images/tree-outline-gradient.png') ?>">
      </div>

      <div id="title" class="">
        <div class="my-5 w-full text-center">
          <h1 class="uppercase font-bold text-5xl md:text-6xl lg:text-7xl tracking-tighter">Sycamore <span class="">Design</span></h1>
        </div>

        <div class="w-full">
            <p class="mb-8 px-12 text-3xl md:text-5xl italic text-yellow-200 text-center font-thin">Full-service web development for a new era.</p>
        </div>
        <div class="w-full text-center">
            <button class="inline-block text-xl md:inline md:w-5/12 md:mr-2 w-3/4 mb-4 py-3 px-3 bg-red-400 tracking-wide text-gray-800 rounded-md hover:bg-yellow-200"><a href="#contact">Work With Us</a></button>
            <button class="inline-block text-xl md:inline md:w-5/12 w-3/4 py-3 px-3 bg-transparent text-gray-100 tracking-wide border rounded-md hover:text-yellow-200 hover:border-yellow-200"><a href="#services">Learn More</a></button>
        </div>
      </div>

    </div>


  </section>



  <main>









    <section id="services" class="p-3 md:p-10 lg:px-36">

      <div class="lg:grid lg:grid-cols-5 lg:grid-rows-1 lg:gap-10 lg:content-center">

        <div class="md:col-span-3">

          <h2 class="text-center md:text-left my-5 py-2 uppercase text-5xl md:text-6xl tracking-tighter text-gray-100">What We Do</h2>
          
          <div class="md:border-b md:border-l p-3 md:p-10 mb-10">
            <p class="mb-10 py-2 text-3xl lg:text-5xl font-thin text-yellow-200">We build smartphone-friendly websites that will impress your customers <span class="italic">and</span> make Google happy.
            </p>
            <p class="mb-5 py-2">Find out more about <a class="underline text-gray-100 hover:text-red-400" href="#how">how this works</a> behind the scenes.</p>
          </div>

        </div>


      

        <div class="mb-10 bg-gray-300 text-gray-900 p-3 md:p-10 rounded-lg border-l-8 border-b-8 border-gray-500 md:col-span-2">
          <div class="flex place-content-center text-5xl pb-5">
          <ion-icon name="bulb-outline"></ion-icon>
          </div>
          
          <h3 class="mb-5 py-2 text-2xl md:text-3xl tracking-tighter uppercase text-center">Did you know?</h3>

          <p class="mb-5 py-2">
            As of 2020, mobile users account for about <a class="underline text-red-600 hover:text-red-400" href="https://www.statista.com/statistics/277125/share-of-website-traffic-coming-from-mobile-devices/" target="_blank">half of all traffic online</a>. 
          </p>
          <p class="mb-5 py-2">
            That number is <a class="underline text-red-600 hover:text-red-400" href="https://www.cnbc.com/2019/01/24/smartphones-72percent-of-people-will-use-only-mobile-for-internet-by-2025.html" target="_blank">expected to increase to 72%</a> by 2025.
          </p>
          <p class="mb-5 py-2">
            If your website is not optimized for phone screens, you're missing out on the majority of users!
          </p>
        </div>


      </div>



      <div class="py-10">
          <h2 class="text-center md:text-left mb-5 py-2 uppercase text-5xl md:text-6xl tracking-tighter text-gray-100">Services</h2>


        <div class="lg:grid lg:grid-cols-2 lg:gap-10 lg:items-start">


          <div class="flex flex-col place-items-center md:block p-3 md:p-10">
            <ion-icon name="code-slash-outline" class="text-5xl text-red-400"></ion-icon>
            <h4 class="text-center md:text-left my-5 py-2 text-yellow-200 tracking-tighter text-3xl md:text-4xl">Design & Development</h4>
            <p class="mb-5 py-2 w-full">
              In 2021, your customers are looking for you on small vertical screens that we navigate with our thumbs. 
            </p>
            <p class="mb-5 py-2 w-full">
              But last generation's websites were designed with a horizontal desktop monitor and mouse in mind.
            </p>
            <p class="mb-5 py-2 w-full">
              We take a mobile-first approach to design, making the touchscreen experience our highest priority.
            </p>

          </div>

          <div class="flex flex-col place-items-center md:block p-3 md:p-10 mb-10">
            <ion-icon name="cloud-upload-outline" class="text-5xl text-red-400"></ion-icon>
            <h4 class="text-center md:text-left my-5 py-2 text-yellow-200 tracking-tighter text-3xl md:text-4xl">Deployment & Support</h4>
            <p class="mb-5 py-2 w-full">
              You don't need to worry about the source code - you've got more important things to do! 
            </p>
            <p class="mb-5 py-2 w-full">
              We take the pain out of the deployment process by working directly with your web host to get your site up and running.
            </p>
            <p class="mb-5 py-2 w-full">
              After your site goes live. we'll always be available for technical support.
            </p>
          </div>

          <div id="how" class="flex flex-col place-items-center md:block p-3 md:p-10">
            <ion-icon name="document-text-outline" class="text-5xl text-red-400"></ion-icon>
            <h4 class="text-center md:text-left my-5 py-2 text-yellow-200 tracking-tighter text-3xl md:text-4xl">Copywriting & Marketing</h4>
            <p class="mb-5 py-2 w-full">
              Many of your clients will view your website before they ever contact you. Does your site make the best first impression possible?
            </p>
            <p class="mb-5 py-2 w-full">
              When a user visits, we have just a few precious seconds to persuade them to stick around.
            </p>
            
            <p class="mb-5 py-2 w-full">
              We captivate your users by centering their satisfaction in everything we create.
            </p>

          </div>

          <div class="flex flex-col place-items-center md:block p-3 md:p-10" id="seo">
            <ion-icon name="search-outline" class="text-5xl text-red-400"></ion-icon>
            <h4 class="text-center md:text-left my-5 py-2 text-yellow-200 tracking-tighter text-3xl md:text-4xl">Search Engine Optimization</h4>

            <p class="mb-5 py-2 w-full">
              To the uninitiated, SEO can feel a lot like sorcery.  
            </p>
            <p class="mb-5 py-2 w-full">
              We aim to demystify the SEO process for our clients.
            </p>
            <p class="mb-5 py-2 w-full">
              All of our website packages include basic keyword research, technical SEO, and <a class="underline text-gray-100 hover:text-red-400" href="https://moz.com/learn/seo/schema-structured-data" target="_blank">Schema markup</a> - the latest and greatest way to impress Google's mysterious bots.
            </p>
          </div>

          

        </div>



    




      <div class="flex place-content-center items-center">
          <div class="max-w-xl my-10 bg-gray-300 text-gray-900 p-3 md:p-10 rounded-lg border-l-8 border-b-8 border-gray-500">
            <div>
              <p class="mt-5 py-2 text-3xl md:text-5xl font-thin italic">
                "I couldn't be happier!"
              </p>
              <p class="w-full my-5 py-2">
                "Sam did an amazing job updating and deploying my website. Sam operated start to finish with professionalism and integrity. 
              </p><p class="w-full mb-5 pb-2">
                "My ideas and concerns were addressed and implemented in an artistic way and I couldn't be happier with the end result."
                
              </p>

              <div class="mx-auto flex justify-content-around items-center max-w-md">

                <div class="w-3/4">
                <img src="<?php echo get_theme_file_uri('/images/michael-lyons.png') ?>">
                </div>


                <div>
                  <h3 class="mb-5 py-2 text-xl md:text-2xl tracking-tighter text-center">Michael Lyons, Lyonscape</h3>
                </div>

              </div>

            </div>
              
          </div>

          
      </div>


      <div class="flex place-content-center my-5">
        <button class="inline-block w-3/4 m-5 p-3 tracking-wide bg-red-400 text-gray-800 rounded-md lg:w-1/2 hover:bg-yellow-200"><a href="#contact">Request a Quote</a></button>
      </div>




      </div>

    </section>










    <section id="portfolio" class="p-3 md:p-10 lg:px-36 bg-gray-400 text-gray-900 border-b-8 border-t-8 border-gray-500">

      <h2 class="text-center md:text-left my-5 py-2 uppercase text-5xl md:text-6xl tracking-tighter">Portfolio</h2>

      <div class="md:grid md:grid-cols-2 md:grid-rows-2 md:gap-10 md:items-start">

        <div class="rounded-lg border-l-8 border-b-8 bg-gray-300 border-gray-500 my-10 p-3 md:p-10">
        <img src="<?php echo get_theme_file_uri('/images/glr-ss-m.jpg') ?>" class="border-2 border-gray-900 w-full my-5 rounded-lg">
          <h4 class="py-2 tracking-tighter text-3xl md:text-4xl">Good Life Revival</h4>
          <p class="my-2 py-2 text-gray-600">Lifestyle brand and educational resource dedicated to sustainability and self-reliance.</span>
          <ul class="mb-5">
            <li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="https://www.thegoodliferevival.com" target="_blank">View site</a></li>
            <!--<li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600"" href="#">Read case study</a></li>-->
          </ul>
        </div>

        <div class="rounded-lg border-l-8 border-b-8 bg-gray-300 border-gray-500 my-10 p-3 md:p-10">
          
        <img src="<?php echo get_theme_file_uri('/images/ls-ss-m.jpg') ?>" class="border-2 border-gray-900 w-full my-5 rounded-lg">
          <h4 class="py-2 tracking-tighter text-3xl md:text-4xl">Lyonscape</h4>
          <p class="my-2 py-2 text-gray-600">Landscaping company in Santa Cruz, CA.</span>
          <ul class="mb-5">
            <li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="http://www.lyonscape.com" target="_blank">View site</a></li>
              <!--<li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="#">Read case study</a></li>-->
          </ul>
        </div>

        <div class="rounded-lg border-l-8 border-b-8 bg-gray-300 border-gray-500 my-10 p-3 md:p-10">
          
        <img src="<?php echo get_theme_file_uri('/images/rtr-ss-m.jpg') ?>" class="border-2 border-gray-900 w-full my-5 rounded-lg">
          <h4 class="py-2 tracking-tighter text-3xl md:text-4xl">Restore the Redwoods</h4>
          
          <p class="my-2 py-2 text-gray-600">Non-profit organization raising awareness about the impacts of climate change on the redwood ecosystem.</span>
            <ul class="mb-5">
              <li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="https://restoretheredwoods.netlify.app" target="_blank">View site</a></li>
              <!--<li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="#">Read case study</a></li>-->
            </ul>
        </div>

        <div class="rounded-lg border-l-8 border-b-8 bg-gray-300 border-gray-500 my-10 p-3 md:p-10">
          
        <img src="<?php echo get_theme_file_uri('/images/jzk-ss-m.jpg') ?>" class="border-2 border-gray-900 w-full my-5 rounded-lg">
          <h4 class="py-2 tracking-tighter text-3xl md:text-4xl">Joshu's Zen Koans</h4>
          <p class="my-2 py-2 text-gray-600">Collection of Buddhist parables that feature the Zen monk Joshu.</span>
            <ul class="mb-5">
              <li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="https://joshu-zen-koans.netlify.app" target="_blank">View site</a></li>
              <!--<li><ion-icon name="chevron-forward-outline" class="text-sm"></ion-icon> <a class="underline font-bold hover:text-red-600" href="#">Read case study</a></li>-->
            </ul>
          </ul>
        </div>

      </div>

    </section>









    <section id="about" class="p-3 md:p-10 lg:px-36">
      <div class="md:grid md:grid-cols-5 md:grid-rows-1 md:gap-10 md:items-center">

        <div class="col-span-3 ">
          <h2 class="text-center md:text-left my-5 py-2 uppercase text-5xl md:text-6xl tracking-tighter text-gray-100">About</h2>
          <div class="md:border-b md:border-l p-3 md:p-10 mb-10">
          <p class="mb-5 py-2 text-3xl lg:text-5xl font-thin text-yellow-200">
            Sycamore Design is a web design 
            and development firm based in Santa Cruz, California.
          </p>

          <p class="mb-5 py-2">
            We specialize in modern, mobile-responsive websites for local businesses that are optimized according to <a href="https://developers.google.com/search/docs" class="underline text-gray-100 hover:text-red-400" target="_blank">Google's best practices</a> for SEO.
          </p>
          <p class="mb-5 py-2">
            We especially love working with contractors, tradespeople, and small business owners. But we are happy to take on clients from any industry if it's a good fit.
          </p>
          </div>
        </div>

        <div class="col-span-2">
        <img src="<?php echo get_theme_file_uri('/images/sam-sycamore.jpg') ?>" class="w-full mb-2 rounded-lg">
          <span class="italic text-gray-100 py-2">Sam Sycamore, owner</span>
        </div>

      </div>

    </section>










    <section id="contact" class="p-3 md:p-10 lg:px-36 flex place-content-center">
      <div class="rounded-lg max-w-xl mb-10 text-gray-900 p-10 border-l-8 border-b-8 bg-gray-300 border-gray-500">
          
        <h3 class="text-center md:text-left mb-5 py-2 text-5xl md:text-6xl tracking-tighter uppercase">Contact</h3>

        <p class="mb-5 py-2">
          Let's talk about how we can work together to improve your web presence. 
        </p>
        <p class="mb-5 py-2">
          Shoot us a message through the form below, and we will be in touch shortly to schedule a quick call.
        </p>
  
          <form id="contactForm">
            <label for="name">* Name:</label><br>
            <input id="name" name="name" type="text" required class="w-full mb-6 border-b border-l border-gray-500"><br>
  
            <label for="email">* Email:</label><br>
            <input id="email" name="email" type="email" required class="w-full mb-6 border-b border-l border-gray-500"><br>
  
            <label for="phone">* Phone:</label><br>
            <input id="phone" name="phone" type="tel" required class="w-full mb-6 border-b border-l border-gray-500"><br>
  
            <label for="comment">* Tell us about your project:</label><br>
            <textarea id="comment" name="comment" rows="3" cols="20" required class="w-full mb-6 border-b border-l border-gray-500"></textarea><br>
            <span class="italic text-lg">* Required</span>
            <button type="submit" value="Submit" onclick="sendEmail()" class="inline-block w-full my-4 py-4 px-4 bg-red-400 tracking-wide text-gray-800 rounded-md hover:bg-yellow-200"><a href="#contact">Submit</a></button>
        </form>
  
      </div>
      
    </section>




  </main>

  </div>


  <script src="form.js"></script>
  <script src="main.js"></script>

  <?php get_footer(); ?>

</body>
</html>