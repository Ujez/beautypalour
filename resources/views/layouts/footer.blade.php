
    <div class="pt-12 xl:pt-14 px-6">
        <div tabindex="0" aria-label="footer"
            class="focus:outline-none w-full border-gray-300 dark:border-gray-700 border-t lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
            <div class="container mx-auto py-12">
                <div class="xl:flex lg:flex md:flex pt-6">
                    <div class="w-11/12 xl:w-3/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0">
                        <div class="flex items-center mb-6 xl:mb-0 lg:mb-0">
                            <div aria-label="logo" role="img">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg1.svg"
                                    alt="logo" />
                            </div>
                            <p tabindex="0" class="focus:outline-none ml-3 font-bold text-xl">
                                BeautyPalour
                            </p>
                        </div>
                    </div>
                </div>
                <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                        <p tabindex="0" class="focus:outline-none text-gray-800 text-base">
                        <div id="copyright"></div>BeautyPalour. All Rights Reserved
                        </p>
                    </div>
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0">
                        <ul class="xl:flex lg:flex md:flex sm:flex justify-between">
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Terms of
                                    service</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Privacy
                                    Policy</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Security</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a class="focus:outline-none focus:underline" href="javascript:void(0)">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                        <div
                            class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                            <div>
                                <a aria-label="Twitter" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg2.svg"
                                        alt="Twitter" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Instagram" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg3.svg"
                                        alt="Instagram" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Dribble" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg4.svg"
                                        alt="Dribble" />
                                </a>
                            </div>
                            <div>
                                <a aria-label="Github" role="link" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_with_sitemap-svg5.svg"
                                        alt="Github" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- FOOTER END -->



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const paragraph = `
      <p>
        Copyright &copy; ${new Date().getFullYear()} 
      </p>
    `;

        document.getElementById("copyright").innerHTML = paragraph;

        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const targetDiv = document.getElementById("dismiss");
        const btn = document.getElementById("toggle");
        btn.onclick = function() {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }
        };
    </script>