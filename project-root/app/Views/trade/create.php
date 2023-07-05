<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/trade/create" method="post">
    <?= csrf_field() ?>

    
    <label for="stock">Stock</label>
    <select name="stock" id="stock">
    <option value="aapl" >AAPL</option>
    <option value="googl" >GOOGL</option>
    <option value="msft" >MSFT</option>
    <option value="tsla" >tsla</option>
    <option value="jpm" >jpm</option>
    <option value="nflx" >nflx</option>
    <option value="nvda" >nvda</option>
    <option value="ba" >ba</option>
    <option value="dis" >dis</option>
    <option value="v" >v</option>
    <option value="pypl">pypl</option>
    </select>

    <label for="noofshares">Number of shares</label>
    <input type="input" name="noofshares" value="<?= set_value('noofshares') ?>">

    <label for="marketprice">Market Price: </label>
    <input type="number" name="marketprice" value="<?= set_value('marketprice') ?>">
    <br>

    <select name="action" id="action">
    <label for="Action">Action</label>
    <option value="buy" name = 'buy'>Buy</option>
    <option value="sell" name = 'sell'>sell</option>
    </select>

    <select name="type" id="type">
    <label for="Type">Type</label>
    <option value="recurrentinvestment" >Recurrent Investment</option>
    <option value="limitorder" >Limit Order</option>
    <option value="stoporder" >Stop Order</option>
    <option value="trailinglimitorder" >Trailing Limit Order</option>
    <option value="stoplimitorder" >Stop Limit Order</option>
    </select>


    <input type="submit" name="submit" value="Submit order">
</form>