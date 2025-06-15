<h1 class="text-2xl font-semibold text-gray-700 mb-4">product</h1>
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
                    Danh sách product
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/read.php?page=1&limit=10
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
                    http://localhost/PHPAPI/api/product/read_one.php?id=1&id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">3</td>
                <td class="p-3 border border-gray-200">
                    Thêm product
                </td>
                <td class="p-3 border border-gray-200">
                    POST
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/create.php
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">4</td>
                <td class="p-3 border border-gray-200">
                    Cập nhật product
                </td>
                <td class="p-3 border border-gray-200">
                    POST
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/update.php?id=1&id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">5</td>
                <td class="p-3 border border-gray-200">
                    Xóa product
                </td>
                <td class="p-3 border border-gray-200">
                    DELETE
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/delete.php?id=1&id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">6</td>
                <td class="p-3 border border-gray-200">
                    Sản phẩm mới với số mẫu tin mặc đinh 9
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/getNew.php?limit=9
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">7</td>
                <td class="p-3 border border-gray-200">
                    Sản phẩm khuyễn mãi mặc định 9 mẫu tin
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/getSale.php?limit=9
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">8</td>
                <td class="p-3 border border-gray-200">
                    Sản phẩm theo danh mục, mỗi danh mục có 10 mẫu tin
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/getCategory.php?limit=9&category_id=1
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">9</td>
                <td class="p-3 border border-gray-200">
                    Lấy danh sách theo vị trí và status=1, số mẫu tin mặc đinh 10
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/getAll.php?page=1&category_id=1&brand_id=1&&limit=10&keyword=null
                </td>
            </tr>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="p-3 border border-gray-200 text-center">10</td>
                <td class="p-3 border border-gray-200">
                    Lấy chi tiết sản phẩm dựa vào slug, sản phẩm cùng loại với số mẫu tin mặc định 10
                </td>
                <td class="p-3 border border-gray-200">
                    GET
                </td>
                <td class="p-3 border border-gray-200">
                    http://localhost/PHPAPI/api/product/getRow.php?slug=ten-ssp&limit=10
                </td>
            </tr>
        </tbody>
    </table>
</div>