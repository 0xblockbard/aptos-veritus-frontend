@extends('default')

@section('content')

    <div class="flex w-full py-24 shadow-md" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729019452/truthbound-header-5_fpilmh.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-red-800 font-extrabold">Guide: How it works</h3>
                <span class="w-20 border-2 border-red-800 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-9/12 px-12 pt-16 pb-24 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-gray-50 border-2 border-red-800 p-4 rounded-md shadow-lg shadow-red-200">
                
                <div class="mt-2 px-10 py-6 text-gray-600 space-y-6">

                    <h2 class="font-semibold text-2xl">Truth Assertion Flow</h2>

                    <p>
                    This is how truths can be asserted and validated on-chain using the Veritus Optimistic Oracle:
                    </p>

                    <h3 class="font-semibold">Truth Submission:</h3>
                    <p>
                    An asserter submits a truth, such as the outcome of an event or a verified claim, directly to the Veritus optimistic oracle. This submission includes a unique identifier to distinguish it from other assertions and a bond, which ensures the integrity of the claim. The bond is refunded if the assertion remains undisputed.
                    </p>

                    <p>
                    Note that in our case, for simplicity of data retrieval, we use a sequential <code>u64</code> identifier for each assertion. However, the unique assertion ID that has been hashed with keccak256, similar to UMA Protocol's Optimistic Oracle V3, has been kept for reference and can be deployed for production if needed.
                    </p>

                    <h3 class="font-semibold">Truth Assertion and Validation Period:</h3>
                    <p>
                    Once submitted, the asserted truth enters a validation period during which it can be reviewed. During this time, any network participant has the option to dispute the truth if they believe it to be inaccurate. If the validation period expires without dispute, the truth is accepted as valid and confirmed on-chain.
                    </p>

                    <p>
                    Disputers can challenge the truth by submitting their own bond, which triggers the dispute resolution process. This structure ensures that only truths likely to withstand scrutiny are put forward.
                    </p>

                    <h3 class="font-semibold">Dispute Resolution:</h3>
                    <p>
                    In the event of a dispute, Veritus’s Escalation Manager handles the resolution. The manager assesses the validity of the asserted truth by evaluating available evidence. Based on this assessment, the dispute is resolved either by upholding the original truth or by rejecting it.
                    </p>
                    <p>
                    If the original assertion is found to be incorrect, the asserter’s bond is forfeited, and a portion of it is rewarded to the disputer. Conversely, if the truth is validated as accurate, the asserter’s bond is returned, reinforcing the integrity of the process.
                    </p>

                    <h3 class="font-semibold">Finalization and On-Chain Confirmation:</h3>
                    <p>
                    Once the validation period concludes without dispute, or if the dispute is resolved in favor of the asserter, the truth is confirmed and recorded on-chain. It then becomes accessible to decentralized applications on Aptos, enabling their use of verified information for a variety of purposes.
                    </p>
                    <p>
                    This flow guarantees that assertions are carefully validated before they are permanently available on-chain, allowing decentralized applications to rely on accurate, on-chain truths while maintaining transparency and accountability throughout the process.
                    </p>
                    
                </div>

            </div>

        </div>

    </div>

@endsection
