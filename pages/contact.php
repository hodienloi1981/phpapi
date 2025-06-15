<h1 class="text-2xl font-semibold text-gray-700 mb-4">contact</h1>
<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="p-3 border border-gray-300 text-center w-8">STT</th>
                <th class="p-3 border border-gray-300 text-left">Chức năng</th>
                <th class="p-3 border border-gray-300 text-left">Method</th>
                <th class="p-3 border border-gray-300 text-left">URL</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">1</td>
                <td class="p-3 border border-gray-200">
                    Danh sách contact
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/read.php
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">2</td>
                <td class="p-3 border border-gray-200">
                    Một mẫu tin
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/read_one.php?id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">3</td>
                <td class="p-3 border border-gray-200">
                    Thêm contact
                </td>
                <td class="p-3 border border-gray-200">
                    POST
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/create.php
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">4</td>
                <td class="p-3 border border-gray-200">
                    Cập nhật contact
                </td>
                <td class="p-3 border border-gray-200">
                    POST
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/update.php?id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">5</td>
                <td class="p-3 border border-gray-200">
                    Xóa contact
                </td>
                <td class="p-3 border border-gray-200">
                    DELETE
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/delete.php?id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">6</td>
                <td class="p-3 border border-gray-200">
                    Lấy danh sách theo vị trí và status=1, số mẫu tin mặc đinh 10
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/contact/getList.php?position=slideshow&limit=10
                </td>
            </tr>
        </tbody>
    </table>
</div>