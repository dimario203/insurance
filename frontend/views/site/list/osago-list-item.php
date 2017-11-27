<div class="card bg-light border-0 my-5">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12 text-center py-md-3">
                        <img src="<?=$polis['company']['logo']?>">
                    </div>
                </div>
                <hr class="d-block d-sm-block d-md-none">
            </div>
            <div class="col-lg-4 border border-top-0 border-bottom-0">
                <p>Сумма страховки</p>
                <p><span class="font-weight-bold"><?=$polis['summa']?> Руб.</span></p>
                <p>Тип полиса</p>
                <p><span class="font-weight-bold">Базовый</span></p>
                <hr class="d-block d-sm-block d-md-none">
            </div>
            <div class="col-lg-4">
                <p>Цена полиса</p>
                <p><span class="font-weight-bold"><?=$polis['price']?> Руб.</span></p>
                <button type="submit" class="btn btn-red btn-lg btn-block my-md-3">
                    Оформить полис
                </button>
            </div>
        </div>
    </div>
</div>