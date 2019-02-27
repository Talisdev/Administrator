<section>
    <div class="row">
        <div class="col-md-9">
            <h2 class="m--font-info"><?php getCategoryTitle($ressources_category); ?></h2>
            <?php studentListRessources($user_classe_id, $ressources_category); ?>
        </div>
        <div class="col-md-3">
            <div class="m-list-search">
                <div class="m-list-search__results">
                    <span class="m-list-search__result-category m-list-search__result-category--first">
                        Autres ressources
                    </span>
                    <?php studentListRessourcesCategories($user_classe_id); ?>
                </div>
            </div>
        </div>
    </div>
</section>