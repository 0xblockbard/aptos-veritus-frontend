@extends('default')

@section('content')

    <div class="bg-red-50 overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-16 px-12 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-rose-100 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-gray-700 font-semibold tracking-wide">0xBlockBard</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-red-800 sm:text-4xl font-roboto">About Veritus</h3>
                    <p class="mt-4 text-md text-gray-900 italic ">Simplifying On-Chain Data Integrity with Optimistic Verification</p>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-red-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div id="about_image" class="relative text-base mx-auto max-w-prose lg:max-w-none sm:pl-20">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729008064/truthbound-about-1_o83ezd.png" alt="Crowdfunding the future, one idea at a time">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Bridging web2 and web3 data</span>
                            </figcaption>
                        </figure>
                    </div>

                </div>
                
                <div class="mt-8 lg:mt-0">

                    <div class="mt-2 prose prose-red text-gray-600 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1 text-justify pr-5 space-y-6">

                        <p><span class="font-semibold text-red-900">Veritus</span> Optimistic Oracles provides a flexible way to verify data on the Aptos blockchain using Move, ideal for projects that need fast, adaptable, and accurate on-chain data validation.</p>

                        <p>The underlying model we adopt is based on UMA Protocol's Optimistic Oracle V3, designed to streamline and simplify the way blockchain-based applications interact with real-world data quickly and efficiently yet reliably.</p>

                        <p>With <span class="font-semibold text-red-900">Veritus</span> as the foundational layer upon which other modules are built, users can submit various types of data directly onto Aptos — from sports scores to insurance claims and market predictions, albeit the most traditional use case would be for price feed data.</p>

                        <p>Optimistic oracles also operate on the principle that data is assumed correct until challenged, which enables efficient and flexible dispute resolution. As it operates *optimistically*, the vast majority of the time, we will be able to get answers quickly and efficiently with minimal gas usage.</p>

                        <p>This optimistic approach to truth assertions is well-suited for projects where quick and straightforward data verification is crucial, such as in prediction markets, insurance, and data assertion contracts.</p>

                        <p>Moreover, this oracle framework can support a broad range of applications across DeFi, gaming, and more, providing a bridge between blockchain and the real world.</p>

                        <p>With this adaptation of UMA Protocol's optimistic oracle on Move, <span class="font-semibold text-red-900">Veritus</span> is positioned to become a key tool for developers seeking reliable, on-chain data without the complexities of more traditional oracles on the Aptos blockchain.</p>

                        <p class="font-semibold italic">By 0xBlockBard</p>

                        <p><span class="font-semibold">Twitter / X:</span> <a class="hover:underline hover:text-red-600" target="_blank" href="https://x.com/0xblockbard">https://x.com/0xblockbard</a></p>

                        <p><span class="font-semibold">Substack Newsletter:</span> <a class="hover:underline hover:text-red-600" target="_blank" href="https://www.0xblockbard.com/">https://www.0xblockbard.com</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection