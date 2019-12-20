
<section class="search-leftbar scroll_hide2">
					<div class="search-leftbar__container">
						<div class="search-leftbar__ttl-bak">
							<h2 class="search-leftbar__ttl">野菜を探す<span class="search-leftbar__en">Search</span></h2>
						</div>
						<form name="search-leftbar__form" class="search-leftbar__form" action="result.php" method="GET">
							<p class="search-leftbar__keyword"><input name="keyword" class="search-leftbar__keywordBox" type="text" placeholder="キーワードを入力"></p>
							<div class="search-leftbar__pref-select__wrapper">
								<select name="pref_select" class="search-leftbar__pref-select">
									<option value="">仕入れ先を選択</option>
									
									<optgroup label="北海道・東北">
										<?php foreach ($pref[0] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>

									<optgroup label="関東">
										<?php foreach ($pref[1] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>

									<optgroup label="北陸">
										<?php foreach ($pref[2] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
									<optgroup label="東海">
										<?php foreach ($pref[3] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
									<optgroup label="関西">
										<?php foreach ($pref[4] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
									<optgroup label="中国">
										<?php foreach ($pref[5] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
									<optgroup label="四国">
										<?php foreach ($pref[6] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
									<optgroup label="九州">
										<?php foreach ($pref[7] as $key => $prefData) : ?>
											<option value="<?= $prefData ?>"><?= $prefData ?></option>
										<?php endforeach ?>
									</optgroup>
								</select>
							</div>

							<div class="vegetable-select">
								<ul class="vegetable-select__wrapper">
									<?php foreach ($vegetable[0][0] as $vegeData) : ?>
											<li class="vegetable-select__list">
												<label for="vege_name<?= $vegeData["num"] ?>" class="vegetable-select__label">
													<img class="vegetable-select__icon" src="<?= IMG_VEGETABLE . $vegeData["class"] ?>.svg" alt="">
												</label>
											</li>
											<li class="vegetable-select__input"><input id="vege_name<?= $vegeData["num"] ?>" class="vege_checkbox" type="checkbox" name="vege_name" value="<?= $vegeData['name'] ?>"></li>
									<?php endforeach ?>
								</ul>
							</div>	
							
							<p class="search-leftbar__submit-wrapper"><button class="search-leftbar__submit" type="submit">検索</button></p>
						</form>
					</div>
				</section><!-- search-leftbar -->