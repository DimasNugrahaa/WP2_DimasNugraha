<!DOCTYPE html>
<html>
    <head>
        <title>From Input Matakuliah</title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <center>
        <from action="<?= base_url('Toko_sepatu/pesan'); ?>"method="post">
        <table>
            <tr><th cosplan="3">From Toko Sepatu</th></tr>
            <tr><td cosplan="3"><hr></td></tr>
            <tr>
                <th>Nama Pembeli</th><th>: </th>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
                <th>No. Telepon</th><td>: </td>
                <td><input type="text" name="telepon" id="telepon"></td>
            </tr>
            <tr><th>Merk Sepatu</th>
                <td>: </td>
                    <td><select name="merk" id="merk">
                        <option value="">Pilih Merk Sepatu</option>
                        <option value="Nike     375.000">Nike     375.000</option>
                        <option value="Adidas   300.000">Adidas   300.000</option>
                        <option value="Kickers  250.000">Kickers  250.000</option>
                        <option value="Eiger    275.000">Eiger    275.000</option>
                        <option value="Bucherri 400.000">Bucherri 400.000</option>
                    </select></td>
                    </tr>
            <tr><th>Ukuran Sepatu</th>
                <td>: </td>
                    <td><select name="ukuran" id="ukuran">
                        <option value="">Pilih Ukuran Sepatu</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td cosplan="3" align="center">
                    <input type="sumbit" value="Sumbit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>

