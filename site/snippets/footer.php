					<div class="py-2 md:py-4 lg:py-6">
						<?php snippet('container', slots: true)?>
							<div class="flex gap-3">
								© EUROPARC Dreilinden GMBH 2024
								<a href="<?php echo $pages->find('legal')->url() ?>">
									<?php echo $pages->find('legal')->title() ?>
								</a>
								<a href="<?php echo $pages->find('dataprivacy')->url() ?>">
									<?php echo $pages->find('dataprivacy')->title() ?>
								</a>
							</div>
						<?php endsnippet()?>
					</div>
				</div>
      </main>
		</div>
	</div>
	<div id="js-contact" class="fixed flex gap-4 bottom-3 bg-cararra-950 left-1/2 -translate-x-1/2 px-6 py-4 rounded-full text-white transition-transform">
		<a href="mailto:info@europarc.de" class="text-white block"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path></svg></a>
		<a href="tel:+49 (0)33203 846 59-0" class="text-white block"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg></a>
	</div>
</body>
</html>
