<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_ROOT; ?>assets/stylesheet/tail-output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
    <title>Document</title>
</head>
<body>
    <div>
        <section style="position:fixed;top:0;width:100%;z-index:110" class="bg-[#FF6600] bg-gradient-to-br from-orange-600 to-red-600">
            <!-- navbar section -->
            <div class="flex items-center justify-around p-1">
                <a href="<?= URL_ROOT; ?>index">
                    <img src="<?= URL_ROOT; ?>assets/images/logo.png" style="height:70px;width:auto;">
                </a>
                <div class="flex items-around justify-center">
                    <div class="p-2" data-modal-target="small-modal" data-modal-toggle="small-modal" data-aos="zoom-in" data-aos-delay="300">
                        <i class="fas fa-phone-alt text-2xl text-white" title="Call Us"></i>
                    </div>
                    <div class="p-2" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example" data-drawer-placement="top" aria-controls="drawer-top-example" data-aos="zoom-in" data-aos-delay="500">
                        <i class="fas fa-ellipsis-v text-2xl text-white" title="Website Menu"></i>
                    </div>
                </div>
            </div>

        </section>

        
<style>
            .responsive-hero{
                padding:10% 10%;
            }
            @media screen and (max-width: 766px){
                .responsive-hero{
                    padding-top:25%;
                }
            }
            @media screen and (max-width: 384px){
                .responsive-hero{
                    padding-top:35%;
                }
            }
        </style>

        <section style="width:100%;height:100vh;background: linear-gradient(rgba(255, 102, 0, 1), rgba(150, 0, 0, 0.5)), url('assets/images/supper-2610875_1280.jpg');background-repeat:no-repeat;background-size:cover;">
            <div class="md:flex justify-center items-center responsive-hero" style="">
                <div class="md:w-2/3">
                    <div class="flex items-center gap-3 mb-5" data-aos="zoom-in-up">
                        <div style="height:100px;background-color:#FF6600;padding:5px;">
                        </div>
                        <h1 class="font-bold text-4xl text-white">City of David<br>Mount of Zion Ministry</h1>
                    </div>
                </div>
                <div class="md:w-1/3 shadow-xl">
                    <div class="bg-white rounded-lg p-7 mb-5" data-aos="zoom-in" data-aos-delay="300">
                        <h3 class="font-bold text-[#FF6600] text-2xl mb-3">Mission</h3>
                        <p class="text-sm">The vision of City of David The Mount of Zion Ministry is to preach the Gospel of Jesus Christ all over the world, using the Holy Bible by teaching the word of God, Healing the sick with words of God and general humanitarian support.</p>
                    </div>

                    <div class="bg-white rounded-lg p-7 mb-5" data-aos="zoom-in" data-aos-delay="500">
                        <h3 class="font-bold text-[#FF6600] text-2xl mb-3">Vision</h3>
                        <p class="text-sm">The mission of City of David The Mount of Zion Ministry is to guide the disciples of Jesus Christ according to the Book of Matthew 28:19–20. “Go ye therefore, and teach all nations, baptizing them in the name of the Father, and of the Son, and of the Holy Ghost:</p>
                    </div>
                </div>

            </div>
        </section>
        
        <section style="box-sizing:border-box;padding:10%;" class="mb-3 hidden lg:block">
            <div class="rounded-xl shadow-2xl" style="position:absolute;z-index:10;top:95%;background-color:white;width:80%;padding:5%;" align="center">
                <div class="md:flex items-center justify-around">
                    <div>
                        <h2 class="font-bold text-3xl text-blue-600 mb-5 text-right" data-aos="fade-in">Welcome to Church</h2>
                        <p class="text-right">We preach LOVE, we act it, as Christ commands of us. Let us all "..love one another. As I [Christ] have loved you, so you must love one another." John 13:34</p>
                    </div>

                    <div>
                        <img src="assets/images/jesus-8341487_1280.png" style="width: 70%;height:auto;">
                    </div>
                </div>
            </div>
        </section>

        <!--
        <section style="box-sizing:border-box;padding:10%;padding-top:3%;">
            <div class="rounded-xl shadow-2xl" style="background-color:#fff;width:100%;padding:5%;" align="center">
                <div class="md:flex items-center justify-around">
                    <div>
                        <img src="assets/images/hallelujah-6516410_1280.jpg" style="width: 70%;height:auto;">
                    </div>
                    <div>
                        <h2 class="font-bold text-3xl text-blue-600 mb-5 text-left">Jesus Loves You</h2>
                        <p class="text-left">Jesus said “I Love You” with his life by showing up for all of us and giving us hope for our messy lives. He left His throne to come to earth and save us from our miserable selves.</p>
                    </div>
                </div>
            </div>
        </section>
        -->

        <style>
            .dyno{
                margin-top:10%;
            }
            @media screen and (max-width: 580px){
                .dyno{
                    margin-top:30%;
                }
            }
        </style>

        <section class="my-20 p-5 dyno">
            <h2 class="font-bold text-3xl text-center text-[#FF6600] mb-3" data-aos="zoom-in">Read Study and Understand the Word of God</h2>
            <p class="text-small text-center" data-aos="zoom-in">In the beginning was the Word, and the Word was with God, and the Word was God.
                Johnn 1:1</p>
            <div class="md:flex items-center justify-around gap-5 my-10" style="margin-top:7%;">
                
                <div class="text-center p-5 md:w-1/3" style="min-height:317px;" data-aos="zoom-in-up">
                    <i class="fas fa-cross text-4xl mb-5"></i>
                    <h4 class="font-bold text-2xl mb-5">Jesus Loves You</h4>
                    <p>Jesus said “I Love You” with his life by showing up for all of us and giving us hope for our messy lives. He left His throne to come to earth and save us from our miserable selves. It’s through His life and presence in our hearts that we can learn to love ourselves and others.</p>
                </div>

                <div class="shadow-2xl text-center p-5 md:w-1/3 bg-orange-500 flex items-center justify-center rounded-2xl" style="min-height:317px;" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="text-white">
                        <i class="fas fa-bible text-4xl mb-5"></i>
                        <h4 class="font-bold text-2xl mb-5">We are all Sinners</h4>
                        <p>Sin is saying or doing or thinking things that are wrong, and our sins separate us from God. "For all have sinned, and fall short of the glory of God." We deserve punishment for our sins – “The wages of sin is death, but the gift of God is eternal life in Christ Jesus our Lord.”</p>
                    </div>
                </div>

                <div class="text-center p-5 md:w-1/3" style="min-height:317px;" data-aos="zoom-in-up" data-aos-delay="500">
                    <i class="fas fa-globe-africa text-4xl mb-5"></i>
                    <h4 class="font-bold text-2xl mb-5">State of the World</h4>
                    <p>Sadness runs deep in our world today especially for those who don’t know what real love is. Through the life of Jesus, we learn to see that love is more than just words. Love is taking action</p>
                </div>
                
            </div>

        </section>

        <section class="my-20 p-5" style="margin-top:10%;background: linear-gradient(rgba(255, 102, 0, 0.2), rgba(0, 0, 0, 0.5)), url('assets/images/sincerely-media-dGxOgeXAXm8-unsplash.jpg');background-repeat:no-repeat;background-size:cover;min-height:500px;">
            <div class="md:flex items-center justify-around gap-5 my-10" style="margin-top:7%;">            
                <div class="text-left p-5 md:w-1/2">
                    <h4 class="text-right font-bold text-2xl mb-5 text-white">Church Departments</h4>
                    <p class="text-white text-right" data-aos="fade-in">Service in the Lord's house can take many forms. What is important is using your skills or passion to further the kingdom of God. Remember we were given a call to serve in Romans 12: 1; ...pleasing unto God, your reasonable service.</p>
                </div>
                <div class="text-left p-5 md:w-1/2">
                    <!--
                    <h4 class="font-bold text-2xl mb-5 text-white">Departments</h4>
                    -->
                    <div>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200">Choir & Instrumentalists</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" data-aos="zoom-in-up" data-aos-delay="400">Ushering Department</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="600">Evangelism</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" data-aos="zoom-in-up" data-aos-delay="800">Children's Church</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="1000">Security Team</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" data-aos="zoom-in-up" data-aos-delay="1200">Media & Outreach Team</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="1400">Sanctuary Keepers</button>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?= URL_ROOT; ?>contact" style="padding: 2% 7%" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="fade-in">
                    Join Now
                </a>
            </div>
        </section>

        <section class="my-20 p-5" style="margin-top:10%;">
            <!--
            <h2 class="font-bold text-3xl text-center text-[#FF6600] mb-3">Get in Touch With Us</h2>
            <p class="text-small text-center">Need Help or assistance in prayers? or you'd love to call our attention to something.</p>
            -->
            <div class="md:flex items-center justify-around gap-5 my-10" style="">
                <div class="md:px-20 md:flex">
                    <div>

                    </div>
                    <div>
                        
                        <section class="bg-white dark:bg-gray-900" data-aos="zoom-in-up">
                            <div class="py-8 lg:py-2 px-4 mx-auto max-w-screen-md">
                                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-[#FF6600]">Get In Touch With Us</h2>
                                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Need Help or assistance in prayers? or you'd love to call our attention to something.</p>
                                <form action="#" class="space-y-8">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                                    </div>
                                    <div>
                                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                        <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" style="padding:2% 7%">Submit Form</button>
                                </form>
                            </div>
                          </section>

                    </div>
                </div>
            </div>
        </section>

        <section class="my-20 p-5" style="margin-top:10%;background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('assets/images/andrew-seaman-ZwaqicZOAgc-unsplash.jpg');background-repeat:no-repeat;background-size:cover;min-height:500px;">
            <div class="md:flex items-center justify-around gap-5 my-10" style="margin-top:7%;">            
                <div class="text-left p-5 md:w-1/2" data-aos="fade-in">
                    <h4 class="text-right font-bold text-2xl mb-5 text-white">Theme for the Month (Isa. 60:1-2)</h4>
                    <p class="text-white text-right"> Arise, shine; for thy light is come, and the glory of the LORD is risen upon thee. [2] For, behold, the darkness shall cover the earth, and gross darkness the people: but the LORD shall arise upon thee, and his glory shall be seen upon thee.</p>
                </div>
                <div class="text-left p-5 md:w-1/2">
                    <!--
                    <h4 class="font-bold text-2xl mb-5 text-white">Departments</h4>
                    -->
                    
                    <div class="rounded-xl">
                        <img src="assets/images/andrew-seaman-ZwaqicZOAgc-unsplash.jpg">
                    </div>
                    
                    <!--
                    <div>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Choir & Instrumentalists</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Ushering Department</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Evangelism</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Children's Church</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Security Team</button>
                        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Media & Outreach Team</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Sanctuary Keepers</button>
                    </div>
                    -->
                </div>
            </div>
            <!--
            <div class="text-center">
                <button style="padding: 2% 7%" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
                    Join Now
                </button>
            </div>
            -->
        </section>


        <section class="my-20 p-5" style="margin-top:10%;">
            <!--
            <h2 class="font-bold text-3xl text-center text-[#FF6600] mb-3">Get in Touch With Us</h2>
            <p class="text-small text-center">Need Help or assistance in prayers? or you'd love to call our attention to something.</p>
            -->
            <div class="md:flex items-center justify-around gap-5 my-10" style="">
                <div class="md:px-20 md:flex">
                    <div>

                    </div>
                    <div>
                        
                        <section class="bg-white">
                            <div class="py-8 lg:py-2 px-4 mx-auto max-w-screen-md">
                                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-[#FF6600]" data-aos="fade-in">Our Locations</h2>
                                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl" data-aos="fade-in">See list of our branches and locations.</p>

                                <div class="md:flex items-center mb-5">
                                    <div class="flex justify-center md:w-1/2 text-center mb-3">
                                        <img src="assets/images/flags/kenya.png" style="height:auto;" class="md:w-[80%] sm:w-[100%]">
                                    </div>
                                    <div class="md:w-1/2 flex mb-3">
                                        <div class="text-left">
                                            <h3 class="font-extrabold text-2xl mb-5 text-[#FF6600]">Kisii, Kenya</h3>
                                            <h5 class="font-semibold text-xl mb-3">Address:</h5>
                                            <p class="text-md mb-3 font-semibold text-gray-700">Itare Village, Nyaisero, Kisii, Kenya</p>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200">+254713977163</button>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="400">+254793054269</button>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="400">+254729405184</button>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="800">benardarati@gmail.com</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:flex items-center mb-5">
                                    <div class="flex justify-center md:w-1/2 text-center mb-3">
                                        <img src="assets/images/flags/nigeria.png" style="height:auto;" class="md:w-[80%] sm:w-[100%]">
                                    </div>
                                    <div class="md:w-1/2 flex mb-3">
                                        <div class="text-left">
                                            <h3 class="font-extrabold text-2xl mb-5 text-[#FF6600]">Abuja, Nigeria</h3>
                                            <h5 class="font-semibold text-xl mb-3">Address:</h5>
                                            <p class="text-md mb-3 font-semibold text-gray-700">Beside White Garment Church 2nd Okada Junction Mashafa Road, Mpape Abuja Nigeria</p>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200">+2347064382495</button>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200">+2349057777828</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="md:flex items-center mb-5">
                                    <div class="flex justify-center md:w-1/2 text-center mb-3">
                                        <img src="assets/images/flags/nigeria.png" style="height:auto;" class="md:w-[80%] sm:w-[100%]">
                                    </div>
                                    <div class="md:w-1/2 flex mb-3">
                                        <div class="text-left">
                                            <h3 class="font-extrabold text-2xl mb-5 text-[#FF6600]">Akure, Nigeria</h3>
                                            <h5 class="font-semibold text-xl mb-3">Address:</h5>
                                            <p class="text-md mb-3 font-semibold text-gray-700"> No 20 Gbogi Street, Opposite Methodist church, Akure South, Akure</p>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200"></button>
                                            <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 " data-aos="zoom-in-up" data-aos-delay="200"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </section>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="my-20 p-2" style="margin-top:10%;background: linear-gradient(rgba(255, 102, 0, 0.2), rgba(0, 0, 0, 0.5)), url('assets/images/sincerely-media-dGxOgeXAXm8-unsplash.jpg');background-repeat:no-repeat;background-size:cover;min-height:500px;">
                <!--
                <div class="text-left p-2">
                    <h4 class="text-center font-bold text-2xl mb-5 text-white">Picture Speaks</h4>
                    <p class="text-white text-right" data-aos="fade-in">...</p>
                </div>
                -->
                <div class="md:flex items-center justify-around gap-5 my-3" style="margin-top:7%;">            
                    <div class="text-center p-5">
                        
                        
                        <div>

                            

<div class="grid grid-cols-2 md:grid-cols-4 gap-4">

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw1.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw1.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw2.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw2.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw3.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw3.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw4.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw4.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw5.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw5.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw6.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw6.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw7.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw7.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw8.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw8.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw9.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw9.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw10.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw10.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw11.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw11.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw12.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw12.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw13.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw13.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>

    <div>
        <a href="<?= URL_ROOT; ?>assets/images/raw/raw14.jpeg" data-fancybox="gallery" data-caption="Caption #1">
            <img src="<?= URL_ROOT; ?>assets/images/raw/raw14.jpeg" style="" class="h-auto max-w-full rounded-lg"/>
        </a>
    </div>
</div>


                        </div>


                        
                    </div>
                </div>
            </section>
        </section>
            <!-- Footer -->
        


        <footer class="rounded-lg m-4 bg-transparent">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
              <span class="text-sm text-orange-500 sm:text-center">© 2021-2024 <a href="https://flowbite.com/" class="hover:underline">City of David Mount of Zion™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="<?= URL_ROOT; ?>about" class="hover:underline me-4 md:me-6 text-orange-500">About</a>
                </li>
                <li>
                    <a href="<?= URL_ROOT; ?>contact" class="hover:underline me-4 md:me-6 text-orange-500">Contact</a>
                </li>
                <li>
                    <a href="<?= URL_ROOT; ?>give" class="hover:underline me-4 md:me-6 text-orange-500">Give</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@estheraderinkola5907" class="hover:underline me-4 md:me-6 text-orange-500">Youtube</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/groups/143470912191489" class="hover:underline me-4 md:me-6 text-orange-500">Facebook</a>
                </li>

                <li>
                    <a href="https://www.instagram.com/adasaaderinkola/" class="hover:underline me-4 md:me-6 text-orange-500">Instagram</a>
                </li>
            </ul>
            </div>
        </footer>
        
        
                </section>
                <section>
                    <!-- Prayer Requests -->
        
                </section>
                <section>
                    <!-- Newsletter -->
        
                </section>
        
                <section>
                    <!-- Menu Drawer -->
                    <!--
                    <div class="text-center">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-bottom-example" data-drawer-show="drawer-bottom-example" data-drawer-placement="bottom" aria-controls="drawer-bottom-example">
                        Show bottom drawer
                        </button>
                     </div>
                    -->
                     
                     <!-- drawer component -->
                     <div id="drawer-top-example" class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-top-label" style="z-index:110;">
                        <h5 id="drawer-top-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>Website Menu</h5>
                        <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close menu</span>
                       </button>
                       <div class="md:flex p-2 gap-10 text-center" style="">
                            <div class="flex md:w-1/4" style="flex-direction:column">    
                                <h3 class="font-bold text-lg text-center mb-3 text-orange-500">Quick Links</h3>
                                <a href="/index" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Home</button>
                                <a href="/about" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">About Us</a>
                                <a href="/contact" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Contact</a>
                                <a href="/contact/give" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Give</a>
                            </div>
                            <div class="md:w-2/4 mb-3 text-center">
                                <h3 class="font-bold text-lg text-center mb-3 text-orange-500">About Us</h3>
                                <p>The goal of the City of David Mount of Zion Ministries is to reach the nations of the world with Good News of Jesus Christ through preaching the true word of God with the Holy Bible....</p>
                                <a href="<?= URL_ROOT; ?>about">Learn More</a>
                            </div>
        
                            <div class="md:w-2/4 mb-3 text-center">
                                <h3 class="font-bold text-lg text-center mb-3 text-orange-500">Our Address</h3>    
                                <p>L.E.A Primary School, Beside Ministry of Works & Housing, Mabushi, Abuja, Nigeria....</p>
                                <a href="<?= URL_ROOT; ?>contact">Learn More</a>
                            </div>
                            <div class="flex md:w-1/4 hidden md:block text-center" style="flex-direction:column">
                                <h3 class="font-bold text-lg text-center mb-3 text-orange-500">Social</h3>    
                                <a href="https://www.facebook.com/groups/143470912191489" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Facebook</a>
                                <a href="https://www.youtube.com/@estheraderinkola5907" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Youtube</a>
                                <a href="https://www.instagram.com/adasaaderinkola/" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Instagram</a>
                            </div>
        
                       </div>
                    </div>
                </section>
        
                <section>
                    <!-- Modal toggle -->
                    <!--
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Toggle modal
                    </button>
                    -->
        
                    <!-- Small Modal -->
        <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 rounded-t  bg-orange-500">
                        <h3 class="text-xl font-medium dark:text-white text-white">
                            Reach Out to Us
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <!-- Content goes here -->
                        <div class="mb-5">
                            <p class="text-sm font-grey-500 font-bold">Telephone Number:</p>
                            <h2 class="font-bold text-xl text-[#FF6600]">+234-806-715-6174</h2>
                        </div>
                        <div class="mb-5">
                            <p class="text-sm font-grey-500 font-bold">Address:</p>
                            <h2 class="font-bold text-xl text-[#FF6600]">L.E.A Primary School, Beside Ministry of Works & Housing, Mabushi, Abuja, Nigeria.</h2>
                        </div>
                        <div class="mb-5">
                            <p class="text-sm font-grey-500 font-bold">Email</p>
                            <h2 class="font-bold text-xl text-[#FF6600]">themountofzion818@gmail.com</h2>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <a href="<?= URL_ROOT; ?>contact" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Learn More</a>
                        <button data-modal-hide="small-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</button>
                    </div>
                </div>
            </div>
        </div>
                </section>
        
            </div>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
            <script>
                AOS.init();
            </script>

            <script>
                Fancybox.bind("[data-fancybox]", {
                    // Your custom options
                });
            </script>
        </body>
        </html>
