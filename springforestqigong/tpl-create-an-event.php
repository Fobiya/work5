<?php
/**
* Template Name: Create An Event Page*
*/
get_header(); ?>
    
    <section class="section__ create-an-event__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
             <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            <!-- .breadcrumbs-->
            
          </div>
          <div class="col m12 s12 l12 xl12">
            <form name="checkout" method="post" action="/" enctype="multipart/form-data" novalidate="novalidate">
              <div class="row">
                <div class="col m12 s12 l12 x12">
                  <ul class="box__bat">
                    <li class="open"><a class="title" href="javascript:;">Create your event</a>
                      <div class="tab__info">
                        <div class="block">
                          <div class="box__content">
                            <h3 class="title__">Name and schedule</h3>
                            <label for="event-name">Event name</label>
                            <div class="input__">
                              <input type="text" name="event-name" placeholder="For example Healing connection" value="">
                            </div>
                            <label for="event-name">Select dates</label>
                            <div class="data__">
                              <input type="date" name="select-dates" placeholder="21 July, 2022" value="">
                            </div>
                            <div class="checkbox__">
                              <input type="checkbox" name="select-dates" placeholder="21 July, 2022" value="">
                              <label for="event-name">Select dates</label>
                            </div>
                            <div class="select__">
                              <select name="billing_country" autocomplete="country" data-placeholder="Every Month">
                                <option value="">Every Month</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">&angst;land Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                              </select>
                            </div>
                            <div class="war__too">
                              <div class="select__ label__">
                                <label for="event-name">Start time</label>
                                <select name="billing_country" autocomplete="country" data-placeholder="Every Month">
                                  <option value="">14:00</option>
                                  <option value="AF">14:00</option>
                                  <option value="AX">14:00</option>
                                </select>
                              </div>
                              <div class="select__ label__">
                                <label for="event-name">End time</label>
                                <select name="billing_country" autocomplete="country" data-placeholder="Every Month">
                                  <option value="">15:30</option>
                                  <option value="AF">15:30</option>
                                  <option value="AX">15:30</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="box__content">
                            <h3 class="title__">Choose type of event </h3>
                            <label for="event-name">Event name </label>
                            <div class="select__">
                              <select name="billing_country" autocomplete="country" data-placeholder="Class">
                                <option value="">Class</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">&angst;land Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                              </select>
                            </div>
                            <div class="show__section">
                              <div class="box__section"><span class="grays_">Online</span><a class="sel" href="javascript:;"></a><span class="orans_">Offline</span></div>
                              <div class="box__content">
                                <div class="select__">
                                  <select name="billing_country" autocomplete="country" data-placeholder="Class">
                                    <option value="">Class</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">&angst;land Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="show__section">
                              <div class="box__section"><span class="grays_">Free</span><a class="sel" href="javascript:;"></a><span class="orans_">Paid</span></div>
                              <div class="box__content">
                                <div class="input__">
                                  <input type="text" name="event-name" placeholder="$100" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="block__bot"><a class="orange" href="javascript:;" data-next="1">Continue</a><a class="border_orange" href="javascript:;" data-next="1">Cancel</a></div>
                    </li>
                    <li class="open"><a class="title" href="javascript:;">Add content</a>
                      <div class="tab__info">
                        <div class="block">
                          <div class="box__content">
                            <h3 class="title__">Add event s image</h3>
                            <div class="box__upload">
                              <div class="upload__input">
                                <input type="file" name="select-dates" placeholder="" value=""><img src="<?= get_template_directory_uri(); ?>/img/upload__img.svg" alt="upload__img">
                                <p class="info">recomended size 1920x650</p>
                                <p class="upload">Upload</p>
                              </div>
                              <div class="upload__input">
                                <input type="file" name="select-dates" placeholder="" value=""><img src="<?= get_template_directory_uri(); ?>/img/upload__img.svg" alt="upload__img">
                                <p class="info">recomended size 1026x1036</p>
                                <p class="upload">Upload</p>
                              </div>
                            </div>
                            <h3 class="title__">Add content</h3>
                            <div class="tab__"><a class="overview active" href="javascript:;">Overview</a><a class="faq" href="javascript:;">FAQ</a><a class="add" href="javascript:;">Add section</a>
                              <ul class="list">
                                <li><a href="javascript:;">Teacher</a></li>
                                <li><a href="javascript:;">More about event/class</a></li>
                                <li><a href="javascript:;">FAQ</a></li>
                              </ul>
                            </div>
                            <div class="tab__content">
                              <div class="open"> 
                                <div class="show__section">
                                  <div class="box__section"><span class="grays_Event">Event description</span><a class="sel" href="javascript:;"></a></div>
                                  <div class="box__content">
                                    <h3 class="sub_title">Headline name</h3>
                                    <div class="input__">
                                      <input type="text" name="event-name" placeholder="Recommended 2-4 words" value="">
                                    </div>
                                    <h3 class="sub_title">Text</h3>
                                    <div class="textarea__">
                                      <textarea name="comment" placeholder="Recommended no more than 700 symbols"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="show__section">
                                  <div class="box__section"><span class="grays_Event">List 1</span><a class="sel" href="javascript:;"></a></div>
                                  <div class="box__content">
                                    <h3 class="sub_title">List’s headline<span>(up to 10)</span></h3>
                                    <div class="input__">
                                      <input type="text" name="event-name" placeholder="Recommended 2-4 words" value="">
                                    </div>
                                    <h3 class="sub_title"> List item</h3>
                                    <div class="lict__input">
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div><a class="add__item" href="javascript:;">Add list’s item</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="show__section">
                                  <div class="box__section"><span class="grays_Event">List 2</span><a class="sel" href="javascript:;"></a></div>
                                  <div class="box__content">
                                    <h3 class="sub_title">List’s headline<span>(up to 10)</span></h3>
                                    <div class="input__">
                                      <input type="text" name="event-name" placeholder="Recommended 2-4 words" value="">
                                    </div>
                                    <h3 class="sub_title">List’s headline<span>(up to 4)</span></h3>
                                    <div class="lict__input_ list__col">
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div>
                                        <div class="input__">
                                          <input type="text" name="event-name" placeholder="Recommended 3-7 words" value="">
                                        </div>
                                      </div>
                                      <div><a class="add__item" href="javascript:;">Add list’s item</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <h3>2</h3>
                              </div>
                              <div>
                                <h3>3</h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="block__bot"><a class="border_orange" href="javascript:;" data-next="2">Return</a><a class="orange" href="javascript:;" data-next="3">Continue</a></div>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    

<?php get_footer('not');