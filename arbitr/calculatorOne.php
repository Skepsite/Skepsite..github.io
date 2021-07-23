<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.css">
  <link rel="shortcut icon" href="favicon.ico">
  <title>Калькулятор государственной пошлины | Мой Арбитр</title>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/master.js" defer></script>
  <script src="js/calc.js" defer></script>
</head>
<body class="calcOne-body">
  <div class="babl">
    <div class="babl-body">
      <img src="img/gerb.svg" alt="Мой Арбитр">
    </div>
  </div>
  <header class="header_calcOne">
      <div class="nav_calcOne">
        <div class="nav_logo">
          <a href="home.php" class="nav_logo-link"></a>
        </div>
        <div class="nav_name">
          <h1 class="nav_name-title">Калькулятор государственной пошлины</h1>
        </div>
      </div>
      <div class="calcOne-flex">
        <div class="calcOne-result">
          <div class="calcOne-choice-wrapper">
            <h3 class="calcOne-heading">Истец:</h3>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="plaintiff" value="Individual" checked class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Физическое лицо</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="plaintiff" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Юридическое лицо</p>
            </label>
          </div>

          <div class="calcOne-choice-wrapper">
            <h3 class="calcOne-heading">Тип заявления:</h3>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" checked class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Заявление имущественного характера</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Заявление о выдаче судебного приказа</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Заявление неимущественного характера</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Апелляционная и (или) кассационная жалоба</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Надзорная жалоба</p>
            </label>
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="statement" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-choice-text">Прочие заявления</p>
            </label>
          </div>

          <div class="calcOne_js">
            <div class="calcOne-choice-wrapper">
              <span class="calcOne-total">Введите сумму иска</span>
            </div>
            <div class="calcOne-cost-wrapper">
              <p class="calcOne-cost-text">Размер пошлины составит:</p>
              <div style="display:flex; align-items: flex-end;">
                <span class="calcOne-cost">0</span>
                <p class="calcOne-cost-ed">руб.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="calcOne-write">
          <!-- <h3 class="calcOne-heading">Сумма иска:</h3>
          <div class="calcOne-input-wrapper">
            <input type="text" class="calcOne-input" autocomplete="off" maxlength="10" value="0" data-name="sum" name="sum">
            <p class="calcOne-input-ed">рублей</p>
          </div> -->

          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Корпоративные споры</p>
            </label>
            <p class="calcOne-write-text">Споры, связанные с деятельностью хозяйственных товариществ и обществ</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Неисполнение обязательств по договору</p>
            </label>
            <p class="calcOne-write-text">Невыполнение стороной договора любого из своих обязательств, включая ненадлежащее исполнение или просрочку исполнения договора</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Оспаривание ненормативных правовых актов, решений и действий</p>
            </label>
            <p class="calcOne-write-text">Признание ненормативного правового акта недействительным, признание решений и действий (бездействия) незаконными</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Обеспечение иска</p>
            </label>
            <p class="calcOne-write-text">Принятие мер, обеспечивающих реальность исполнения будущего судебного или арбитражного решения</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Установление юридически значимых фактов</p>
            </label>
            <p class="calcOne-write-text">Под фактами, имеющими значение для возникновения, изменения или прекращения прав юридических лиц и граждан-предпринимателей, подразумеваются обстоятельства, определенным образом влияющие на динамику правоотношений, но не сами правоотношения</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Выдача исполнительных листов</p>
            </label>
            <p class="calcOne-write-text">Выдача документа на основании решений, приговоров и иных судебных актов, в котором приводится резолютивная часть решения, указывается наименование суда и дело, по которому выдан лист, даты вынесения решения и вступления в законную силу, дата выдачи самого листа</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Отмена решения третейского суда</p>
            </label>
            <p class="calcOne-write-text">Отмена решения третейского суда в связи с нарушениями, допущенными при рассмотрении дела</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Заявление о признании должника несостоятельным (банкротом)</p>
            </label>
            <p class="calcOne-write-text">Признание должника банкротом по обращению самого должника, кредитора и иных заинтересованных лиц</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Заявление о признании и приведении в исполнение решения иностранного суда, иностранного арбитражного решения</p>
            </label>
            <!-- <p class="calcOne-write-text">Отмена решения третейского суда в связи с нарушениями, допущенными при рассмотрении дела</p> -->
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Заявление об оспаривании актов, содержащих разъяснения законодательства и обладающих нормативными свойствами</p>
            </label>
            <p class="calcOne-write-text">Оспаривание актов федеральных органов исполнительной власти, иных федеральных государственных органов, Центрального банка Российской Федерации, государственных внебюджетных фондов, содержащих разъяснения законодательства и обладающих нормативными свойствами</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Заявление об оспаривание актов в сфере патентных прав, содержащих разъяснения законодательства и обладающих нормативными свойствами</p>
            </label>
            <p class="calcOne-write-text">Оспаривание актов федеральных органов исполнительной власти в сфере патентных прав и прав на селекционные достижения, права на топологии интегральных микросхем, права на секреты производства (ноу-хау), права на средства индивидуализации юридических лиц, товаров, работ, услуг и предприятий, права использования результатов интеллектуальной деятельности в составе единой технологии, содержащих разъяснения законодательства и обладающих нормативными свойствами</p>
          </div>
          <div class="calcOne-write-card">
            <label class="label">
              <div class="label_radio-wrapper">
                <input type="radio" name="write" value="Individual" class="label_radio">
                <span class="label_radio-fake"></span>
              </div>
              <p class="calcOne-write-title">Иные заявления неимущественного характера, в том числе заявления о признании права, заявления о присуждении к исполнению обязанности в натуре</p>
            </label>
            <!-- <p class="calcOne-write-text">Отмена решения третейского суда в связи с нарушениями, допущенными при рассмотрении дела</p> -->
          </div>
        </div>
      </div>
      <div class="footer-calc"></div>
  </header>
</body>
</html>
