
<table border=1 class="mt-5 ml-5 h-[150px]">
    <caption class="text-[30px] font-medium mb-5">Thêm danh mục</caption>
    <form
        action="modules/quanlydanhmuc/xuly.php"
        method="post">
        <tr>
            <td><label for="id_cate">ID_CATEGORY</label></td>
            <td><input type="text" name="id_cate">
            </td>
        </tr>
        <tr>
            <td><label for="name_cate">NAME_CATEGORY</label></td>
            <td><input type="text" name="name_cate">
            </td>
        </tr>
        <tr>
            <td class="text-center t-5 w-[50px] bg-gray-400 rounded-2xl"><input type="submit" name="themdanhmuc" value="Thêm danh mục"></td>
        </tr>
    </form>
</table>