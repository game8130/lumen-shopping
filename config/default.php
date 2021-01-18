<?php
// 放置初始化資料 Database Seeds
return [
    // 初始總權限名稱(無法異動/刪除)
    'adminGroupName'   => '超級管理者',
    'generalGroupName' => '一般會員',
    // 初始管理者帳號/密碼/名稱/Email
    'adminAccount'   => 'administrator',
    'adminPassword'  => 'password',
    'adminName'      => '超級管理員',
    'adminEmail'     => 'administrator@email.com',
    'levels' => [[
        'name' => '普通會員',
        'amount' => 0,
        'amount_max' => 1000,
    ],[
        'name' => '高級會員',
        'amount' => 1001,
        'amount_max' => 5000,
    ],[
        'name' => '超級會員',
        'amount' => 5001,
        'amount_max' => 10000,
    ],[
        'name' => '超高級會員',
        'amount' => 10001,
        'amount_max' => 20000,
    ],[
        'name' => '頂級會員',
        'amount' => 20001,
        'amount_max' => 100000000,
    ],],
    'category1' => [[
        'name' => '日用',
        'category2' => ['衛生紙','舒潔','嬰童紙尿褲','溼紙巾','好奇','幫寶適','滿意寶寶','成人紙尿褲','銀髮族','醫療用品','商店街','3M科技生活館','洗衣精','家用清潔劑','掃除用具','除濕除蟲','dalli達麗','春風','倍潔雅','五月花','麗仕','沐浴乳','洗髮精','牙膏牙刷','進口洗沐','臉部專區','美體','天然有機','寶寶日用','防護保暖']
    ],[
        'name' => '食品',
        'category2' => ['家好選物','年菜','年貨大街','料','礦泉水','休閒零食','團購','沖泡','啡','茶葉','立頓','奶粉','甜點','黑貓','南紡美食','進口零食','進口飲料','進口沖調','進口食材','生鮮冷凍','食材','速食麵','食用油','調料罐頭','生機','小吃','生鮮','水果','電子票券','養生保健','桂格','白蘭氏','正官庄','娘家','日落恩賜','運動保健','男性保健','維他命','窈窕保健','美顏保健','婦幼保健']
    ],[
        'name' => '生活',
        'category2' => ['鍋具','WMF','康寧','餐廚','餐具','杯瓶','BRITA','膳魔師','咖啡茶','婦幼','兒','孕產品','親子外出','枕','名寢','南紡生活','床包','床墊','浴','飾','樂高','玩具','桌遊積木','角落生物','童裝','辦公品','電腦椅','文具','開運','生活工場','比漾','值','品牌傢俱','iloom','hoi!','沙發','櫃','層架','晾曬','Bosch','電工','修繕','居安','特力屋']
    ],]
];
