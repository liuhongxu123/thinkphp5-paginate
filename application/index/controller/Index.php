<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Task;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('list');
    }

    public function list(){
        // 查询状态为1的用户数据 并且每页显示10条数据
//        $list = Task::where('appCode','feizhu')->paginate(1);
//        echo '<pre>';
//        return json_encode($list,JSON_UNESCAPED_UNICODE);
        // 获取分页显示
//        $page = $list->render();
        // 模板变量赋值
//        $this->assign('list', $list);
//        $this->assign('page', $page);

        $a = '{
  "total": 800,
  "rows": [
    {
      "id": 0,
      "name": "Item 0",
      "price": "$0"
    },
    {
      "id": 1,
      "name": "Item 1",
      "price": "$1"
    },
    {
      "id": 2,
      "name": "Item 2",
      "price": "$2"
    },
    {
      "id": 3,
      "name": "Item 3",
      "price": "$3"
    },
    {
      "id": 4,
      "name": "Item 4",
      "price": "$4"
    },
    {
      "id": 5,
      "name": "Item 5",
      "price": "$5"
    },
    {
      "id": 6,
      "name": "Item 6",
      "price": "$6"
    },
    {
      "id": 7,
      "name": "Item 7",
      "price": "$7"
    },
    {
      "id": 8,
      "name": "Item 8",
      "price": "$8"
    },
    {
      "id": 9,
      "name": "Item 9",
      "price": "$9"
    },
    {
      "id": 10,
      "name": "Item 10",
      "price": "$10"
    },
    {
      "id": 11,
      "name": "Item 11",
      "price": "$11"
    },
    {
      "id": 12,
      "name": "Item 12",
      "price": "$12"
    },
    {
      "id": 13,
      "name": "Item 13",
      "price": "$13"
    },
    {
      "id": 14,
      "name": "Item 14",
      "price": "$14"
    },
    {
      "id": 15,
      "name": "Item 15",
      "price": "$15"
    },
    {
      "id": 16,
      "name": "Item 16",
      "price": "$16"
    },
    {
      "id": 17,
      "name": "Item 17",
      "price": "$17"
    },
    {
      "id": 18,
      "name": "Item 18",
      "price": "$18"
    },
    {
      "id": 19,
      "name": "Item 19",
      "price": "$19"
    }
  ]
}';
    return $a;

    }
}
