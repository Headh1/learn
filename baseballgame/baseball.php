<?php
/*
1. 3개의 숫자를 랜덤으로 받아온다. 중복x
//숫자범위 0-9 range(0, 9)
2. 자리가 틀리고 숫자가 맞으면 볼
//shuffle , in_array ball
3. 자리와 숫자까지 맞으면 스트라이크
// array[0 , 1 , 2] = val strike
4. 숫자를 다 틀리면 아웃
// !== out
5. 자리와 숫자 다 동일하면 홈런
answer(array[0 , 1 , 2] = val ) == array[0 , 1 , 2] = val homerun
6. 이걸 인풋으로 받아온다고? ... 되나?
9회

그러니까 0-9에서 중복되지 않게 숫자를 뽑아온 다음에
인덱스가 0,1,2 인 배열을 만들어서 input으로 값을 받아오고
in_array인 값이면 볼
인덱스 까지 일치하면 스트라이크
세개가 다 일치하면 홈런인 게임을 php로 만들어서 while문으로 돌리겠다는 이야기 인데?
*/

$base = array();
$answer = array();
$number=array(0,1,2,3,4,5,6,7,8,9);
shuffle($number);

for($a=0; $a<3; $a++){
    $base = array_shift($number);
    array_push($answer,$base);
}

$inning=1;

while($inning>10){

$player=array();
echo "야구 게임을 시작합니다. \n";
echo "$inning 회";
echo "숫자를 입력하세요 : ";
fscanf(STDIN, "%d %d %d", $player[0],$player[1],$player[2]); 

$sk=0;
$ball=0;
for($i=0; $i<3; $i++){
    if($player[$i]==$answer[$i]){
        $sk++;
    }
    else if (in_array($input[$i], $answer)) {
        $ball++;
    }

$inning++;
$tryCount++;
if ($strike === 4) {
    echo "축하합니다! 정답을 맞추셨습니다.\n";
    break;
  } else {
    echo "{$strike} 스트라이크, {$ball} 볼입니다.\n";
    $tryCount++;
  }
}
echo "게임 종료! {$tryCount}번 시도하셨습니다.\n";
}


// while(true) {
//     echo "시작";
//     echo "\n";
//     echo "게임 시작 : 0";
//     fscanf(STDIN, "%d\n", $input);        
//         echo $input;
//         print "\n";
//     }
//     echo "끝!\n";
// }

?>