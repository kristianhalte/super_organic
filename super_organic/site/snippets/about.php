      <section id="about" class="bbx-builder-row bbx-4x-padding-bottom">
        <div class="section-content-width"> <!-- Element Width -->
          <div class="bbx-row bbx-grid-4x-margin no-outter-padding">
            <div class="bbx-col-1">
              <div class="bbx-element-content bbx-4x-padding-top">
                <div class="bbx-row bbx-grid-4x-margin no-outter-padding">
                  <div class="bbx-col-1 bbx-animation-on-appear fade_left">
                    <h5 class="bbx-sergeant transparent-text-black">Our Story</h5>
                    <h3><?php echo $page->title()->html() ?></h3>
                    <p><?php echo $page->text()->kirbytext() ?></p>
                    <p class="transparent-text-black"><?php echo $page->text_second()->kirbytext() ?> </p>
                    <span class="bbx-sign"><?php echo $site->sign()->kirbytext() ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>