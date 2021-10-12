<?php
// continue oop php
class SumNumber
{
    private $n1;
    private $n2;

    public function nhapDuLieu()
    {
        if(isset($_POST['btnSum'])) {
            $m1 = $_POST['n1'] ?? '';
            $m2 = $_POST['n2'] ?? '';
            if(is_numeric($m1) && is_numeric($m2)){
                $this->n1 = $m1;
                $this->n2 = $m2;
                $result = $this->tinhTong();
                header("Location:total-number.php?state=success&n1={$m1}&n2={$m2}&result={$result}");
            } else {
                header('Location:total-number.php?state=error');
            }
        }
        
    }

    private function tinhTong()
    {
        return $this->n1 + $this->n2;
    }
}
$sum = new SumNumber;
$sum->nhapDuLieu();