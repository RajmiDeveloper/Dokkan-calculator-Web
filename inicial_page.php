<?php include("conection.php"); 

$page = isset($_REQUEST['Page'])?$_REQUEST['Page']:1;
?>

<form action="index.php">
    <input type="Submit" value="Agregar personaje">
    <input type="hidden" value="newCharacter" name="body">
</form>

<div id="DivSearch">
    <?php
        
        $from = 30*($page-1);
        echo "<script>console.log('page vale: ".$page."')</script>";
        echo "<script>console.log('from vale: ".$from."')</script>";
        $list = "SELECT * FROM character_info ORDER BY release_date desc LIMIT $from,30 ";
        echo'<script> console.log("page is: '.$page.' ")</script>';
        $connect = mysqli_query($con, $list);
        $idConsult = "SELECT * FROM character_info";
        $idCon = mysqli_query($con, $idConsult);
        $idArray = mysqli_num_rows($idCon);
        while($listArray = mysqli_fetch_array($connect)){
            echo '<form action="index.php" class="searchForms">';
                echo '<div class="CharacterList">';
                    echo '<input class="imgInputs" type="image" src="Assets/units/Background/'.$listArray['Type'].'.png" style="width: 100%; height: 100%;">';
                    echo '<img src="Assets/units/Rarity/'.$listArray['Rarity'].'.png" class="RarityIMG">';
                    if($listArray['Rarity']=="SSR" || $listArray['Rarity']=="UR" || $listArray['Rarity']=="LR"){
                        echo '<img src="Assets/units/Types/'.$listArray['Class'].'_'.$listArray['Type'].'.png" class="TypeIMG">';
                    }else{
                        echo '<img src="Assets/units/Types/'.$listArray['Type'].'.png" class="TypeIMG">';      
                    }

                    echo '<img src="Assets/Characters/Icon/'.$listArray['ID'].'.webp" class="CharacterIMG">';
                echo '</div>';
                echo '<input type="hidden" name="charID" value="'.$listArray['ID'].'">';
                echo '<input type="hidden" name="body" value="calcs">';

            echo'</form>';
        }
        echo '<script> console.log("SQL tiene '.$idArray.' datos");</script>';
    ?>
</div>


<form action="index.php" method="get" >
    <div id="pages">
        <?php
            for($i = $page-3; $i<$page; $i++){
                if($i > 0){
                    echo '<input class="PageButtons" type="submit" value="'.($i).'" name="Page">';
                }
            }
            echo'<input class="PageButtons" type="submit" value="'.$page.'" disabled>';
            for($i = $page; $i<$page+3; $i++){
                if(($i+1) * 30 > $idArray){
                    break;
                }
                echo '<input class="PageButtons" type="submit" value="'.($i+1).'" name="Page">';
            }
        ?>
    </div>
</form>
<script>
    function equalSize(){
        var items = document.getElementsByClassName('searchForms');
        for(var i = 0; i < items.length; i++){
            items[i].style.height =  items[i].offsetWidth + 'px';
        }
    }
    equalSize();
    window.addEventListener("resize", (event) => {
        equalSize();
});
</script>

    <!--<div class="CharacterList">

    </div> 


<form action="index.php" method="POST" id="Form" >
    <div>
        <div>
            <label for="Name">Name Event:</label>
            <input type="text" id="Name" name="Name">
        </div>
        <div>
            <label for="NumEvent">Number Event:</label>
            <input type="text" id="NumEvent" name="NumEvent">
        </div>
        <div>
            <label for="Phase">Phase:</label>
            <input type="text" id="Phase" name="Phase">
        </div>
    </div>   
    <?php for($i = 1; $i < 6;$i++){ ?>
        <div style="border: black solid 2px;">
            <h2>Enemy <?php echo $i?></h2>
            <div>
                <label for="Type">Type:</label>
                <select name="Type<?php echo $i?>" id="Type">
                    <option value="STR">STR</option>
                    <option value="PHY">PHY</option>
                    <option value="INT">INT</option>
                    <option value="TEQ">TEQ</option>
                    <option value="AGL">AGL</option>
                </select>
                <select name="Class<?php echo $i?>" id="Type">
                    <option value="Extreme">Extreme</option>
                    <option value="Super">Super</option>
                </select>
            </div>

            <div>
                <label for="HP">HP:</label>
                <input type="number" id="HP" name="HP_Enemy<?php echo $i?>" value=0>
            </div>
            <div>
                <label for="ATK">ATK:</label>
                <input type="number" id="ATK" name="ATK_Enemy<?php echo $i?>" value=0>
            </div>
            <div>
                <label for="DEF">DEF:</label>
                <input type="number" id="DEF" name="DEF_Enemy<?php echo $i?>" value=0>
            </div>
            <div>
                <label for="DR">Damage Reduction:</label>
                <input type="number" id="DR" name="DR_Enemy<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="SA">SA Damage:</label>
                <input type="number" id="SA" name="SA_Enemy<?php echo $i?>" value="0">
                <label for="Cant_SA">Quantity:</label>
                <input type="number" id="Cant_SA" name="Cant_SA<?php echo $i?>" min=0 max=3 value=1>
            </div>
            <div>
                <label for="SA_ATK_D">SA ATK reduction:</label>
                <input type="number" id="SA_ATK_D" name="SA_ATK_D<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="SA_DEF_D">SA DEF reduction:</label>
                <input type="number" id="SA_DEF_D" name="SA_DEF_D<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="SA_ATK_u">SA ATK Raises:</label>
                <input type="number" id="SA_ATK_u" name="SA_ATK_u<?php echo $i?>" value="0">
            <br>
                <label for="SA_DEF_u">SA DEF Raises:</label>
                <input type="number" id="SA_DEF_u" name="SA_DEF_u<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="AOE_ATK">AOE_ATK:</label>
                <input type="number" id="AOE_ATK" name="AOE_ATK<?php echo $i?>" value="0">
            </div>
            <div>
                <p>Nulifications:  </p>
                <label for="Null ATK_D">ATK_D</label>
                <input type="checkbox" id="Null ATK_D" name="Null_ATK_D<?php echo $i?>" checked>
                <label for="Null DEF_D">DEF_D</label>
                <input type="checkbox" id="Null DEF_D" name="Null_DEF_D<?php echo $i?>"checked>
                <label for="Null Stun">Stun </label>
                <input type="checkbox" id="Null Stun" name="Null_Stun<?php echo $i?>"checked>
                <label for="Null Seal">Seal</label>
                <input type="checkbox" id="Null Seal" name="Null_Seal<?php echo $i?>"checked>
                <label for="Null Ki Blast">Ki Blast</label>
                <input type="checkbox" id="Null Ki Blast" name="Null_Ki_Blast<?php echo $i?>">
            </div>
            <div>
                <label for="Chance_Seal">Chance of Sealing:</label>
                <input type="number" id="Chance_Seal" name="Chance_Seal<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="Cant_Seal">Cant of Sealing:</label>
                <input type="number" id="Cant_Seal" name="Cant_Seal<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="Chance_Lock">Chance of Locking:</label>
                <input type="number" id="Chance_Lock" name="Chance_Lock<?php echo $i?>" value="0">
            </div>
            <div>
                <label for="Cant_Lock">Cant of Locking:</label>
                <input type="number" id="Cant_Lock" name="Cant_Lock<?php echo $i?>" value="0">
            </div>
        </div>
    <?php }?>
    

        

    <input type="submit" name="Events">
</form> 


<?php
echo isset($_REQUEST['HP_Enemy1'])?$_REQUEST['HP_Enemy1']:0; 

 
    if(isset($_POST['Events'])){
        $Name=isset($_REQUEST['Name'])?$_REQUEST['Name']:null;
        $NumEvent=isset($_REQUEST['NumEvent'])?$_REQUEST['NumEvent']:null;
        $Phase=isset($_REQUEST['Phase'])?$_REQUEST['Phase']:null;
        $Type1=isset($_REQUEST['Type1'])?$_REQUEST['Type1']:0;
        $Class1=isset($_REQUEST['Class1'])?$_REQUEST['Class1']:0;
        $HP1=isset($_REQUEST['HP_Enemy1'])?$_REQUEST['HP_Enemy1']:0;
        $ATK1=isset($_REQUEST['ATK_Enemy1'])?$_REQUEST['ATK_Enemy1']:0;
        $DEF1=isset($_REQUEST['DEF_Enemy1'])?$_REQUEST['DEF_Enemy1']:0;
        $SA1=isset($_REQUEST['SA_Enemy1'])?$_REQUEST['SA_Enemy1']:0;
        $DR1=isset($_REQUEST['DR_Enemy1'])?$_REQUEST['DR_Enemy1']:0;
        $CantSA1=isset($_REQUEST['Cant_SA1'])?$_REQUEST['Cant_SA1']:0;
        $SA_ATK_D1=isset($_REQUEST['SA_ATK_D1'])?$_REQUEST['SA_ATK_D1']:0;
        $SA_DEF_D1=isset($_REQUEST['SA_DEF_D1'])?$_REQUEST['SA_DEF_D1']:0;
        $SA_ATK_u1=isset($_REQUEST['SA_ATK_u1'])?$_REQUEST['SA_ATK_u1']:0;
        $SA_DEF_u1=isset($_REQUEST['SA_DEF_u1'])?$_REQUEST['SA_DEF_u1']:0;
        $AOE_ATK1=isset($_REQUEST['AOE_ATK1'])?$_REQUEST['AOE_ATK1']:0;
        $Null_ATK_D1=isset($_REQUEST['Null_ATK_D1'])?1:0;
        $Null_DEF_D1=isset($_REQUEST['Null_DEF_D1'])?1:0;
        $Null_Stun1=isset($_REQUEST['Null_Stun1'])?1:0;
        $Null_Seal1=isset($_REQUEST['Null_Seal1'])?1:0;
        $Null_KiBlast1=isset($_REQUEST['Null_Ki_Blast1'])?1:0;
        $Chance_Seal1=isset($_REQUEST['Chance_Seal1'])?$_REQUEST['Chance_Seal1']:0;
        $Cant_Seal1=isset($_REQUEST['Cant_Seal1'])?$_REQUEST['Cant_Seal1']:0;
        $Chance_Lock1=isset($_REQUEST['Chance_Lock1'])?$_REQUEST['Chance_Lock1']:0;
        $Cant_Lock1=isset($_REQUEST['Cant_Lock1'])?$_REQUEST['Cant_Lock1']:0;

        $links = "INSERT INTO `RedZone_Future`( `Name_Event`, `Number_Event`, `Phase`, `Enemy1_HP`, `Enemy1_ATK`, `Enemy1_DEF`, `Enemy1_Type`,`Enemy1_Class`, `Enemy1_DR`, `Enemy1_SA_Damage`, `Enemy1_SA_ATK_Reduction`, `Enemy1_SA_DEF_Reduction`, `Enemy1_AOE_ATK`, `Enemy1_SA_DEF_Raises`, `Enemy1_SA_ATK_Raises`, `Enemy1_Cant_SA`, `Enemy1_Nullifies_ATKDown`, `Enemy1_Nullifies_DEFdown`, `Enemy1_Nullifies_Stun`, `Enemy1_Nullifies_Seal`, `Enemy1_Nullifies_SAKiBlast`, `Enemy1_Chance_Sealing`, `Enemy1_CantEnemy_Sealing`, `Enemy1_Chance_Locking`, `Enemy1_CantEnemy_Locking`) VALUES ('$Name','$NumEvent','$Phase','$HP1','$ATK1','$DEF1','$Type1','$Class1','$DR1','$SA1','$SA_ATK_D1','$SA_DEF_D1','$AOE_ATK1','$SA_ATK_u1','$SA_DEF_u1','$CantSA1','$Null_ATK_D1','$Null_DEF_D1','$Null_Stun1','$Null_Seal1','$Null_KiBlast1','$Chance_Seal1','$Cant_Seal1','$Chance_Lock1','$Cant_Lock1')";
        $consulta = mysqli_query($con,$links);
    }
?>
-->