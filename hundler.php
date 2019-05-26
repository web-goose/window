<?
session_start();
if($_POST['more_f'])
{
  if($_POST['more_number'] == '1')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Регулировка окон</h2>
            <img src="img/more/1.jpg" alt="Картинка">
            <p>Если у вас не открывается или не закрывается створка,
            туго поворачивается ручка,
            при закрытии или открытии задевает или имеется еще какая-либо неисправность.
            <br /><br />Оставьте заявку прямо сейчас и в течение 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '2')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Ремонт, замена фурнитуры</h2>
            <img src="img/block4/2.png" alt="Устранение продуваний">
            <p>Если у Вас плохо открывается или закрывается окно, заедает ручка,
            продувает или еще какая нибудь неисправность.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене.</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '3')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Устранение продуваний</h2>
            <img src="img/block4/3.png" alt="Устранение продуваний">
            <p>Если у Вас продувают, свистят окна или плохая шумоизоляция.
            <br /><br />Оставьте заявку прямо сейчас и в течении 5 минут Вам перезвонит эксперт по окнам,
             предложит несколько вариантов решения и сориентирует по цене.</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '4')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Внутренние откосы</h2>
            <img src="img/more/4.jpg" alt="Наружные откосы и отливы (металл)">
            <p>Изготавливаем и устанавливаем внутренние откосы декоративные и утепленные.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '5')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Наружные откосы и отливы (металл)</h2>
            <img src="img/more/5.jpg" alt="Наружные откосы и отливы (металл)">
            <p>Изготавливаем и устанавливаем наружные откосы из металла на окна и двери декоративные и утепленные.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '6')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Устранение запотевания</h2>
            <img src="img/block4/6.png" alt="Устранение запотевания">
            <p>Потеют и текут окна?<br />
                Плесень на окнах?<br />
                Подоконник в воде?
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '7')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Подоконники</h2>
            <img src="img/more/7.jpg" alt="Подоконники">
            <p>Устанавливаем подоконники всех производителей от стандартных до премиальных (с акриловым покрытием).
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '8')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Установка детских замков</h2>
            <img src="img/block4/8.png" alt="Установка детских замков">
            <p>Устанавливаем детские замки и решетки безопасности.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '9')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Жалюзи</h2>
            <img src="img/more/9.jpg" alt="Жалюзи">
            <p>Собственное изготовление и установка жалюзи:<br  />
            - Горизонтальные, вертикальные шторы<br  />
            - Рулонные<br  />
            - Рулоннокасетные<br  />
            - Римские шторы<br  />
            - Плиссе

            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '10')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Москитные сетки (ремонт и установка)</h2>
            <img src="img/more/10.jpg" alt="Москитные сетки (ремонт и установка)">
            <p>Изготавливаем и устанавливаем москитные сетки. Выезд мастера и замер бесплатно.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '11')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Производство и монтаж новых окон</h2>
            <img src="img/more/11.jpg" alt="Производство и монтаж новых окон">
            <p>Изготавливаем и устанавливаем окна всех производителей от малоизвестных до рехау и ек.
            Подберем конструкцию под ваш вкус и бюджет.
            Заказывая у нас, вы работаете напрямую с официальным представителем завода и гарантированно получаете лучшую цену.
            Выполняя монтаж по госту, гарантия 5 лет.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '12')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Тонировка окон и балконов</h2>
            <img src="img/more/12.jpg" alt="Тонировка окон и балконов">
            <p>Тонируем окна, балконы, любые виды остекления, любые размеры, предложим несколько вариантов пленок.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
}




if ($_POST['kwiz_f'])
{
  if($_POST['question'] == "1")
  {
    session_destroy();
    session_start();
    $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Сколько неисправных окон?</h2>
          <p>Вопрос 2 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="row">
            <div class="form-check col-4">
              <input type="radio" class="form-check-input" id="1" question="2" name="question" value="1">
              <label class="form-check-label" for="1">1</label>
              </div>
              <div class="form-check col-4">
                <input type="radio" class="form-check-input" id="2" question="2" name="question" value="2">
                <label class="form-check-label" for="2">2</label>
                </div>
              <div class="form-check col-4">
              <input type="radio" class="form-check-input" id="3" question="2" name="question" value="3 и более">
              <label class="form-check-label" for="3">3 и более</label>
              </div></div>');
  }
  if($_POST['question'] == "2")
  {
    $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Какая неисправность (в двух словах: течет, дует, плесень, разбито, нужны решетки, москитная сетка и т.д.):</h2>
          <p>Вопрос 3 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
                    <div class="row text-center">
                    <div class="col-12">
          <form action="javascript:void(0);">
                    <div class="col-12 text-center">
            <input type="text" id="question3" question="3" placeholder="В двух слова*" class="w-100" required></div>
                      <div class="col-12 text-center"><button class="button mt-4" type="submit" onclick="Next()">Далее</a></div>
          </form>
          </div></div>');
  }
  if($_POST['question'] == "3")
  {
        $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Напишите номер телефона для расчета стоимости</h2>
          <p>Вопрос 4 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-10 offset-xl-1 col-sm-12 info">
              <div class="wrapper d-flex justify-content-center">
                <div class="form align-self-center text-center">
                  <form action="javascript:void(0);">
                    <input type="text" id="kwiz_name" placeholder="Ваше имя">
                    <input type="text" id="kwiz_phone" placeholder="Ваш телефон*" required>
                    <button class="button" type="submit" onclick="kwiz_finish()">Отправить заявку</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div></div>');

  }

  if($_POST['kwiz_finish'])
  {
  $to = "agafonovpasha@gmail.com";
  $subject = "Опрос";
  $from = "Оконный-страж <root@Оконный-страж.рф>";
  $charset = "utf-8";
  $headerss ="From: ".$from."\r\n";
  $headerss .="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
  foreach ($_SESSION as $key => $value) {
    $msg .= $key.": ".$value." | ";
  }
  $msg .= "Телефон: ".$_POST['phone']." | Имя: ".$_POST['name'];
  mail($to, $subject, $msg, $headerss);
    exit('<h2>Спасибо за пройденный опрос!</h2>');
  }
}


if($_POST['send_f'])
{
  $to = "agafonovpasha@gmail.com";
  $subject = "Заявка";
  $from = "Оконный-страж <root@Оконный-страж.рф>";
  $charset = "utf-8";
  $headerss ="From: ".$from."\r\n";
  $headerss .="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
  $msg = "Телефон: ".$_POST['phone']." | Имя: ".$_POST['name'];
  mail($to, $subject, $msg, $headerss);
  }

?>
