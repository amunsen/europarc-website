					<div class="py-2 md:py-4 lg:py-6">
						<?php snippet('container', slots: true)?>
							<div class="flex gap-3">
								© EUROPARC Dreilinden GMBH 2024
								<a href="<?=$pages->find('legal')->url()?>">
									<?=$pages->find('legal')->title()?>
								</a>
								<a href="<?=$pages->find('dataprivacy')->url()?>">
									<?=$pages->find('dataprivacy')->title()?>
								</a>
							</div>
						<?php endsnippet()?>
					</div>
				</div>
      </main>
		</div>
	</div>
</body>
</html>
