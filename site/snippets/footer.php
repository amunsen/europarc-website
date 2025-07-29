					<div class="py-6 lg:py-8">
						<?php snippet('container', slots: true)?>
						<div class="flex flex-col items-start sm:flex-row gap-6 lg:gap-y-1 justify-between pb-8 border-b border-gray-200">
							<div class="flex-1">
								<ul class="flex flex-col gap-2">
									<li class="flex items-center">
										<a href="mailto:vermietung@europarc.de" class="flex items-center gap-3 text-carrara-950">
											<span class="flex items-center justify-center w-9 h-9 bg-cararra-950 rounded-full text-white">
												<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path></svg>
											</span>
											vermietung@europarc.de
										</a>
									</li>
									<li class="flex items-center">
										<a href="tel:+49 (0)33203 846 59-0" class="flex items-center gap-3 text-carrara-950">
											<span class="flex items-center justify-center w-9 h-9 bg-cararra-950 rounded-full text-white">
												<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>
											</span>
											+49 (0)33203 846 59-0</a>
									</li>
								</ul>
							</div>
								<div class="flex-1 text-base">
									<address class="flex flex-col gap-1.5 not-italic">
										<a class="" href="https://maps.apple.com/place?place-id=I506F7E00E4BD240&address=Albert-Einstein-Ring+15%2C+14532+Kleinmachnow%2C+Germany&coordinate=52.4089347%2C13.1894141&name=Europarc-Kerpen+GmbH&_provider=9902">
											<strong>Europarc Dreilinden GmbH</strong>
										</a>
										<span>
											Albert-Einstein-Ring 11<br/>
											14532 Kleinmachnow
										</span>
									</address>
								</div>
							</div>
							<div class="flex flex-col items-center md:flex-row gap-3 gap-y-1 justify-between pt-6">
								© Europarc Dreilinden GmbH								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                           								                            <?php echo date('Y') ?>
								<span class="flex gap-3">
									<a href="#" onClick="UC_UI.showSecondLayer();">
									<?php if (kirby()->language()->code() === 'en'): ?>
										Privacy Settings
									<?php elseif (kirby()->language()->code() === 'de'): ?>
										Datenschutzeinstellungen
									<?php endif; ?>
									</a>
									<a href="<?php echo $pages->find('legal')->url() ?>">
										<?php echo $pages->find('legal')->title() ?>
									</a>
									<a href="<?php echo $pages->find('dataprivacy')->url() ?>">
										<?php echo $pages->find('dataprivacy')->title() ?>
									</a>
								</span>
							</div>
						<?php endsnippet()?>
					</div>
				</div>
      </main>
		</div>
	</div>
	<div id="js-contact" class="fixed z-50 flex flex-col gap-6 top-1/2 bg-cararra-950 right-0 pl-4 py-4 pr-10 translate-x-[220px] rounded-tl-lg rounded-bl-lg text-white transition-transform hover:translate-x-0">
		<a href="mailto:vermietung@europarc.de" class="flex gap-6 text-white"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path></svg>vermietung@europarc.de</a>
		<a href="tel:+49 (0)33203 846 59-0" class="flex gap-6 text-white"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>+49 (0)33203 846 59-0</a>
	</div>
</body>
</html>
