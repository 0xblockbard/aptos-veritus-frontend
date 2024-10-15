@extends('default')

@section('content')

<div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1729006078/truthbound-header-1_ev4r1t.png'); background-size: cover; background-position: center;">
  <div class="max-w-7xl">
      <div class="flex flex-col ml-16 sm:ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
          <h3 class="text-3xl text-red-500 font-extrabold">Veritus Optimistic Oracle</h3>
          <span class="w-14 border-2 border-blue-800 mt-1"></span>
      </div>
  </div>
</div>

<div class="flex flex-col w-full px-10 mt-10">

    <div class="container mx-auto mt-4 px-4 lg:w-10/12">
      
      <div class="w-10/12">
          <h2 class="text-2xl font-bold text-blue-900">Simplifying On-Chain Data Integrity with Optimistic Verification</h2>

          <p class="text-gray-600 mt-2">Veritus Optimistic Oracles provides a flexible way to verify data on the Aptos blockchain using Move, ideal for projects that need fast, adaptable, and accurate on-chain data validation. </p>

      </div>
      
      <div class="w-10/12 mt-4">

          <h3 class="font-semibold text-lg mt-6 mb-6 text-blue-900">Sample Truth Assertions:</h3>
          
          <table class="min-w-full bg-gray-50 border-2 border-blue-900 rounded-md">

              <thead>
                  <tr class="bg-blue-100 text-blue-800 uppercase text-sm">
                      <th class="py-3 px-4 w-6">ID</th>
                      <th class="py-3 px-4 ">Truth Claim</th>
                      <th class="py-3 px-4 ">Liveness</th>
                      <th class="py-3 px-4 ">Bond</th>
                      <th class="py-3 px-4 ">Identifier</th>
                      <th class="py-3 px-4 ">Status</th>
                  </tr>
              </thead>
              <tbody>

                  <tr class="text-gray-800 text-center border-b">
                    <td class="py-2 px-4 ">1</td>
                    <td class="py-2 px-4 ">truth claim</td>
                    <td class="py-2 px-4 ">14400</td>
                    <td class="py-2 px-4 ">7000</td>
                    <td class="py-2 px-4 ">YES/NO</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center border-b">
                    <td class="py-2 px-4 ">2</td>
                    <td class="py-2 px-4 ">truth claim</td>
                    <td class="py-2 px-4 ">14400</td>
                    <td class="py-2 px-4 ">7000</td>
                    <td class="py-2 px-4 ">YES/NO</td>
                    <td class="py-2 px-4 ">
                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Resolved</span>
                    </td>
                </tr>

                <tr class="text-gray-800 text-center ">
                    <td class="py-2 px-4 ">3</td>
                    <td class="py-2 px-4 ">truth claim</td>
                    <td class="py-2 px-4 ">14400</td>
                    <td class="py-2 px-4 ">7000</td>
                    <td class="py-2 px-4 ">YES/NO</td>
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
