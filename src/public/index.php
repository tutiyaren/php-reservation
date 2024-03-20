<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-予約フォーム</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <section class="text-gray-600 body-font relative" _msthidden="13">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap" _msthidden="13">
            <form class="bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0" _msthidden="7" action="complete.php" method="post">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font" _msttexthash="107042" _msthidden="1" _msthash="273">予約フォーム</h2>
                <div class="relative mb-4" _msthidden="1">
                    <label for="name" class="leading-7 text-sm text-gray-600" _msttexthash="43069" _msthidden="1" _msthash="275">予約者名: </label>
                    <input type="text" id="name" name="name" placeholder="予約者名" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4" _msthidden="1">
                    <label for="email" class="leading-7 text-sm text-gray-600" _msttexthash="58058" _msthidden="1" _msthash="276">Email: </label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4" _msthidden="1">
                    <label for="tel" class="leading-7 text-sm text-gray-600" _msttexthash="58058" _msthidden="1" _msthash="276">電話番号: </label>
                    <input type="tel" id="tel" name="phone_number" placeholder="電話番号" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" _msttexthash="79859" _msthidden="1" _msthash="278">送信</button>
            </form>
        </div>
    </section>
  
</body>
</html>
