<?php
    template('header', array(
        'title' => 'Boite à outils • Millilitres - Litres',
    ));
?>

<section id="ml-litres-converter" class="homepage">
    <div class="container">
        <div class="section-title">
            <h2>Convertisseur millilitres - litres</h2>
        </div>

        <div class="row">
            <figure class="bg-light rounded p-3">
                <blockquote cite="https://example.com">
                    <p>
                        Le millilitre (ml) est une unité de mesure de volume du système international d'unités. Le litre (L) est une unité de mesure de volume équivalente à un décimètre cube.
                    </p>
                </blockquote>
                <figcaption><cite><a href="https://example.com">Source</a></cite></figcaption>
            </figure>
        </div>

        <div class="row">
            <fieldset class="col-6 mt-4">
                <legend>Convertisseur</legend>
                <form action="" name="ml-litres-conversion">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="millilitres">Millilitres</label>
                            <div class="input-group">
                                <input id="millilitres" name="millilitres" type="number" min="0" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="litres">Litres</label>
                            <div class="input-group">
                                <input id="litres" name="litres" type="text" class="form-control" disabled>
                            </div>
                        </div>

                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</section>

<script type="text/javascript">
    window.addEventListener('load', () => {
        let forms = document.forms;
        let millilitresInput = forms['ml-litres-conversion'].elements['millilitres'];

        function convertToLitres(ml) {
            return (ml / 1000).toFixed(3); // 1 liter = 1000 milliliters
        }

        millilitresInput.addEventListener('input', () => {
            let litresOutput = forms['ml-litres-conversion'].elements['litres'];
            let mlLitresBinaryOutput = forms['ml-litres-conversion'].elements['ml-litres-binary'];

            litresOutput.value = convertToLitres(millilitresInput.value);
            mlLitresBinaryOutput.value = millilitresInput.value / 1000;
        });
    });
</script>

<?php template('footer');
