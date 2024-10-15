@extends('default')

@section('content')

<div class="flex w-full py-24 " style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729019452/truthbound-header-5_fpilmh.png'); background-size: cover; background-position: center;">
  <div class="max-w-7xl">
      <div class="flex flex-col ml-16 sm:ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
          <h3 class="text-3xl text-red-800 font-extrabold">Veritus Optimistic Oracle</h3>
          <span class="w-14 border-2 border-red-800 mt-1"></span>
      </div>
  </div>
</div>

<div class="flex flex-col w-full px-10 mt-10">

    <div class="container mx-auto mt-4 px-4 lg:w-10/12">
      
      <div class="w-10/12">
          <h2 class="text-2xl font-bold text-red-900">Simplifying On-Chain Data Integrity with Optimistic Verification</h2>

          <p class="text-gray-600 mt-2">Veritus Optimistic Oracles provides a flexible way to verify data on the Aptos blockchain using Move, ideal for projects that need fast, adaptable, and accurate on-chain data validation. </p>

      </div>
      
      <div class="w-full mt-4">

          <h3 class="font-semibold text-lg mt-6 mb-6 text-red-900">Sample Truth Assertions:</h3>
          
          <table class="min-w-full bg-gray-50 border-2 border-red-900 rounded-md text-sm  mb-24">

              <thead>
                  <tr class="bg-red-100 text-red-800 text-sm">
                      <th class="py-3 px-4 w-6">ID</th>
                      <th class="py-3 px-4 ">Truth Claim</th>
                      <th class="py-3 px-4 ">Description</th>
                      <th class="py-3 px-4 ">Liveness (in seconds)</th>
                      <th class="py-3 px-4 ">Bond (6 d.p.)</th>
                      <th class="py-3 px-4 ">Identifier</th>
                      <th class="py-3 px-4 ">Status</th>
                  </tr>
              </thead>
              <tbody>

                  <tr class="text-gray-800 text-center border-b">
                    <td class="py-2 px-4 ">1</td>
                    <td class="py-2 px-4 text-left">The electricity usage in New York City on October 15, 2024, exceeded 2000 MWh.</td>
                    <td class="py-2 px-4 text-left">Verifies if New York City’s daily electricity usage surpassed 2000 MWh on the specified date. This could be checked against data from energy providers.</td>
                    <td class="py-2 px-4 ">86400</td>
                    <td class="py-2 px-4 ">70,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center border-b">
                    <td class="py-2 px-4 ">2</td>
                    <td class="py-2 px-4 text-left">User 0xABC transferred 1000 tokens to user 0xDEF on October 16, 2024.</td>
                    <td class="py-2 px-4 text-left">Asserts that a specified token transfer took place. Data can be verified via blockchain records of the transaction.</td>
                    <td class="py-2 px-4 ">43200</td>
                    <td class="py-2 px-4 ">50,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">3</td>
                    <td class="py-2 px-4 text-left">The Air Quality Index in San Francisco was below 50 on October 17, 2024.</td>
                    <td class="py-2 px-4 text-left">Validates whether San Francisco’s AQI was classified as ‘Good’ (below 50) on the specified day. Verification can be done through government or environmental agency reports.</td>
                    <td class="py-2 px-4 ">86400</td>
                    <td class="py-2 px-4 ">75,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">3</td>
                    <td class="py-2 px-4 text-left">The Air Quality Index in San Francisco was below 50 on October 17, 2024.</td>
                    <td class="py-2 px-4 text-left">Validates whether San Francisco’s AQI was classified as ‘Good’ (below 50) on the specified day. Verification can be done through government or environmental agency reports.</td>
                    <td class="py-2 px-4 ">86400</td>
                    <td class="py-2 px-4 ">75,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>


                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">4</td>
                    <td class="py-2 px-4 text-left">The University of XYZ had over 30,000 enrolled students as of October 1, 2024.</td>
                    <td class="py-2 px-4 text-left">Confirms the total enrollment numbers for a university on a given date. This information can be verified through official university publications.</td>
                    <td class="py-2 px-4 ">604,800</td>
                    <td class="py-2 px-4 ">150,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>


                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">5</td>
                    <td class="py-2 px-4 text-left">The city of Seattle received over 2 inches of rain on October 14, 2024.</td>
                    <td class="py-2 px-4 text-left">Verifies rainfall in Seattle on the specified day. This data could be cross-verified with weather monitoring services.</td>
                    <td class="py-2 px-4 ">86400</td>
                    <td class="py-2 px-4 ">60,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>


                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">6</td>
                    <td class="py-2 px-4 text-left">Retail Store ABC achieved sales exceeding $100,000 on October 10, 2024.</td>
                    <td class="py-2 px-4 text-left"> Validates the sales figures of a retail store. Verification can be done via sales reports or receipts.</td>
                    <td class="py-2 px-4 ">259,200</td>
                    <td class="py-2 px-4 ">120,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">7</td>
                    <td class="py-2 px-4 text-left">Carbon emissions in Chicago were below 8 metric tons from 1 PM to 2 PM on October 12, 2024.</td>
                    <td class="py-2 px-4 text-left">Validates hourly carbon emissions data in Chicago. This could be checked through environmental monitoring stations.</td>
                    <td class="py-2 px-4 ">3600</td>
                    <td class="py-2 px-4 ">80,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">8</td>
                    <td class="py-2 px-4 text-left">Bitcoin had over 300,000 transactions on October 11, 2024.</td>
                    <td class="py-2 px-4 text-left">Confirms Bitcoin’s transaction count on the specified date. The data is verifiable from blockchain transaction records.</td>
                    <td class="py-2 px-4 ">43200</td>
                    <td class="py-2 px-4 ">130,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">9</td>
                    <td class="py-2 px-4 text-left">The solar farm XYZ produced over 500 MWh of energy on October 18, 2024.</td>
                    <td class="py-2 px-4 text-left">Verifies energy production data for a solar farm, which can be validated by official production logs.</td>
                    <td class="py-2 px-4 ">86400</td>
                    <td class="py-2 px-4 ">200,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">10</td>
                    <td class="py-2 px-4 text-left">The Water Quality Index for River ABC was above 90 on October 13, 2024.</td>
                    <td class="py-2 px-4 text-left">Validates the water quality index for a river, which can be corroborated by environmental monitoring reports.</td>
                    <td class="py-2 px-4 ">172,800</td>
                    <td class="py-2 px-4 ">300,000,000</td>
                    <td class="py-2 px-4 ">ASSERT_TRUTH</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>
              
              </tbody>

          </table>
      </div>
  </div>

</div>
@endsection
