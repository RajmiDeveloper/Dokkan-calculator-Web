<?php 
    include("conection.php");

    $baseNomEven = "fotok0_dokkan_event_challenges";
    $conEvents = mysqli_connect($serverName,$baseUser,$basePass,$baseNomEven);
    $charID = isset($_REQUEST['charID'])?$_REQUEST['charID']:1;
    $gokucon = "select * from character_info where id='$charID'";
    $connect = mysqli_query($con, $gokucon);
    $character = mysqli_fetch_array($connect);


    function maximus($maxStatDef, $statDef, $maxStatAtk,$statAtk,$id){
        if($statAtk === 0 and $statDef === 0){
            return 0;
        }else{
            if ($statDef == 0){$D=0;}else{$D=ceil($maxStatDef/$statDef);};
            if ($statAtk == 0){$A=0;}else{$A=ceil($maxStatAtk/$statAtk);};
            return max($D , $A);
        }
    }
    $link1text = $character['Link 1'];$link2text = $character['Link 2'];$link3text = $character['Link 3'];$link4text = $character['Link 4'];$link5text = $character['Link 5'];$link6text = $character['Link 6'];$link7text = $character['Link 7'];
    $link1s = "SELECT * FROM `links` WHERE Name= '$link1text'";$link2s = "SELECT * FROM `links` WHERE Name='$link2text'";$link3s = "SELECT * FROM `links` WHERE Name='$link3text'";$link4s = "SELECT * FROM `links` WHERE Name='$link4text'";$link5s = "SELECT * FROM `links` WHERE Name='$link5text'";$link6s = "SELECT * FROM `links` WHERE Name='$link6text'";$link7s = "SELECT * FROM `links` WHERE Name='$link7text'";
    $conLink1 = mysqli_query($con, $link1s);$conLink2 = mysqli_query($con, $link2s);$conLink3 = mysqli_query($con, $link3s);$conLink4 = mysqli_query($con, $link4s);$conLink5 = mysqli_query($con, $link5s);$conLink6 = mysqli_query($con, $link6s);$conLink7 = mysqli_query($con, $link7s);
    $Link1 = mysqli_fetch_array($conLink1);$Link2 = mysqli_fetch_array($conLink2);$Link3 = mysqli_fetch_array($conLink3);$Link4 = mysqli_fetch_array($conLink4);$Link5 = mysqli_fetch_array($conLink5);$Link6 = mysqli_fetch_array($conLink6);$Link7 = mysqli_fetch_array($conLink7);
    ?>
    <script>  
    console.log("id igual a: ", <?php echo $charID; ?>);
    const defense_original = <?php echo ($character['DEF'])?>;
    var defense = defense_original;
    var content = `defensa: ${defense}`;
   
    var characterType = <?php echo('"'.$character['Type'].'"')?>; var characterClass = <?php echo ('"'.$character['Class'].'"')?>;
    var hidden_atk = 0;var hidden_def = 0;var hidden_hp = 0; def_boost = 0;

    var leader_skill = 0;
    var defense_start = 0;
    var defense_apart = 0;
    var defense_apart_start = 0;
    var defense_sup_sa = 0;
    var defense_links = 0;
    
    var defense_hits = 0;
    var defense_SA = 0;

    var guard = false;
    var dr = <?php echo $character['UnCon_DR']?>
    
</script>
<form action="index.php" method="post">
    <h3><?php echo ($character['Name']." (".$character['SubName'].") <img id='TypeIMG' src='Assets/units/Types/".$character['Class']."_".$character['Type'].".png'>")?></h3>
    <div style="margin-bottom: 1%;">
        <label for="leader"><h4 style="margin-bottom: 1%;">Leader skill:</h4></label>
        <input type="number" id="leader" style="background-color: gray; color: white;" min=0 >
    </div>
    <?php if($character['Rarity'] == "SSR" || $character['Rarity'] == "UR" || $character['Rarity'] == "LR"){?>
    <div>
        <select id="hidden_potential">
            <option value="0" selected >0%</option>
            <option value="55">55%</option>
            <option value="69">69%</option>
            <option value="79">79%</option>
            <option value="90">90%</option>
            <option value="100">100%</option>
        </select>
    </div>
    <?php }?>
<br>
    <div class="InputContainer">
        <label for="Hits">Hits recived</label>
        <input type="number" id="Hits" min=0 max="<?php echo (maximus($character['Def_Max_Hits'],$character['DEF_Per_Hit'],$character['ATK_Max_Hits'],$character['ATK_Per_Hit'],"Hits")) ?>" >
    </div>
    
    <div class="InputContainer">
        <label for="SAs">SAs launched</label>
        <input type="number" id="SAs" min=0 max="<?php echo (maximus($character['DEF_Max_Per_SA'],$character['DEF_Per_SA'],$character['ATK_Max_Per_SA'],$character['ATK_Per_SA'],"SAs")) ?>" style="background-color: BLACK; color: white; ">
    </div>
<?php 
    for($i = 1; $i < 8; $i++){
        if($character['Link '.$i]){?>
        <div class="LinkDiv">
            <label for="Link <?php echo $i;?>"><?php echo $character['Link '.$i]; ?></label>
            <input type="checkbox" id="Link <?php echo $i;?> check">
            <input type="hidden" value="<?php echo $character['Link '.$i]; ?>" id="Link <?php echo $i;?>">
        </div>
        <?php
        }
    }
?>
   <!-- <div class="InputContainer"></div> 
<img src="Assets/Characters/Image/<?php echo $character['ID']?>.png" alt="">
-->
</form>


<br>
<div id="extra">

</div>

<div id="extra2">

</div>
<button class="RedZone_Future" id="RedZone_Future" >
    <img src="red zone future.webp" style="width:300px">
</button>

<br>

<div class="EventDiv" id="Div_RZFuture" style="border: 15px solid black; width: 85%; margin: 0 auto;">
    <?php 
        $RZFcon = "select * from RedZone_Future group by Number_Event";
        $RZFconnect = mysqli_query($conEvents, $RZFcon);
       

        while($RZFEvent = mysqli_fetch_array($RZFconnect)){
            $tempValue = $RZFEvent['Number_Event'];
            $tempCon = "select * from RedZone_Future where Number_Event = $tempValue ";
            $RZFTemp = mysqli_query($conEvents, $tempCon);
            echo "<div style='border: 10px solid red'>";
            while($Event = mysqli_fetch_array($RZFTemp)){
                echo "<div style='border: 4px solid blue; display: flex;'>";
                    echo "<div style='border: 5px solid black; width: 30%;'>";
                        echo "<img src='Assets/Events/RedZone_Future/".$Event['ID'].".png' style=' width:100%;' class='EventCharIMG'></img>";
                    echo "</div>";

                    echo "<div style='border: 8px solid black; width: 65%; margin-left: 5%; margin-top:5%; height: 100%; display:flex;flex-wrap: wrap;'>";
                        
                        echo "<div style='  width: calc(100%/2);' id='RZFuture".$Event['ID']."'> ";
                            echo " <p style='width: 100%;flex-shrink: 0; border: 2px solid brown;'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium hic consequuntur molestias harum minima numquam nisi nostrum deleniti ratione qui. Fuga magni voluptatum beatae eius quo rerum, accusamus eligendi vel!</p>";
                        echo "</div>";

                        echo "<div style='  width: calc(100%/2);' id='RZFuture".$Event['ID'].$Event['ID']."'> ";
                            echo " <p style='width: 100%; border:flex-shrink: 0; 2px solid brown;'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium hic consequuntur molestias harum minima numquam nisi nostrum deleniti ratione qui. Fuga magni voluptatum beatae eius quo rerum, accusamus eligendi vel!</p>";
                        echo "</div>";

                        if($Event['Enemy1_SA_ATK_Raises']>0){
                            for($i = 1;$i <= $Event['Enemy1_Cant_SA']; $i++){
                                echo "<div style='  width: calc(100%/2);' id='RZFuture".$Event['ID'].$Event['ID'].$i."'> ";
                                    echo " <p style='width: 100%;flex-shrink: 0 border: 2px solid brown;'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium hic consequuntur molestias harum minima numquam nisi nostrum deleniti ratione qui. Fuga magni voluptatum beatae eius quo rerum, accusamus eligendi vel!</p>";
                                echo "</div>";
                            }              
                        }
                    echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        }
        
    ?>
</div>

<img src="" alt="">

    <script>

    defense_start = <?php echo($character['Base_DEF']) ?>;
    defense_apart += <?php echo($character['DEF_When_SA'] + $character['DEF_When_USA'])?>;
    calculateDEF("extra");
    calculateEnemys();  
    if(<?php echo $character['UnCon_Guard'] ?>){guard = true;};
    <?php if($character['Rarity'] == "SSR" || $character['Rarity'] == "UR" || $character['Rarity'] == "LR"){?>
    document.getElementById("hidden_potential").addEventListener("input",(leader)=>{
        let hidden = leader.target.value;
        defense -= hidden_def;
            console.log("reconoce");
            if(<?php echo ("'".$character['Type']."'")?> == "STR"){
            if(hidden == 100){hidden_hp = 5000;hidden_atk = 5400; hidden_def = 4600; def_boost = 15;}else if(hidden == 55){
                hidden_hp = 2000;hidden_atk = 2000; hidden_def = 2000;def_boost = 5;}else if(hidden == 79){
                hidden_hp = 4000;hidden_atk = 4400; hidden_def = 3600;def_boost = 7;}else if(hidden == 69){
                hidden_hp = 3700;hidden_atk = 4100; hidden_def = 3300;def_boost = 6;}else if(hidden == 90){
                hidden_hp = 4310;hidden_atk = 5100; hidden_def = 3910;def_boost = 8;}
        }else if(<?php echo ("'".$character['Type']."'")?> == "PHY"){
            if(hidden == 100){hidden_hp = 5400;hidden_atk = 5000; hidden_def = 4600; def_boost = 15;}else if(hidden == 55){
                hidden_hp = 2000;hidden_atk = 2000; hidden_def = 2000;def_boost = 5;}else if(hidden == 79){
                hidden_hp = 4400;hidden_atk = 4000; hidden_def = 3600;def_boost = 7;}else if(hidden == 69){
                hidden_hp = 4100;hidden_atk = 3700; hidden_def = 3300;def_boost = 6;}else if(hidden == 90){
                hidden_hp = 4710;hidden_atk = 4700; hidden_def = 3910;def_boost = 8;}
        }else if(<?php echo ("'".$character['Type']."'")?> == "INT"){
            if(hidden == 100){hidden_hp = 5000;hidden_atk = 5000; hidden_def = 5000; def_boost = 15;}else if(hidden == 55){
                hidden_hp = 2000;hidden_atk = 2000; hidden_def = 2000;def_boost = 5;}else if(hidden == 79){
                hidden_hp = 4000;hidden_atk = 4000; hidden_def = 4000;def_boost = 7;}else if(hidden == 69){
                hidden_hp = 3700;hidden_atk = 3700; hidden_def = 3700;def_boost = 6;}else if(hidden == 90){
                hidden_hp = 4310;hidden_atk = 4700; hidden_def = 3910;def_boost = 8;}
        }else if(<?php echo ("'".$character['Type']."'")?> === "TEQ"){
            if(hidden == 100){hidden_hp = 4600;hidden_atk = 5400; hidden_def = 5000;def_boost = 15;}else if(hidden == 55){
                hidden_hp = 2000;hidden_atk = 2000; hidden_def = 2000; def_boost = 5;}else if(hidden == 79){
                hidden_hp = 3600;hidden_atk = 4400; hidden_def = 4000; def_boost = 7;}else if(hidden == 69){
                hidden_hp = 3300;hidden_atk = 4100; hidden_def = 3700; def_boost = 6;}else if(hidden == 90){
                hidden_hp = 3910;hidden_atk = 5100; hidden_def = 4310; def_boost = 8;}
        }else if(<?php echo ("'".$character['Type']."'")?> == "AGL"){
            if(hidden == 100){hidden_hp = 4600;hidden_atk = 5000; hidden_def = 5400; def_boost = 15;}else if(hidden == 55){
                hidden_hp = 2000;hidden_atk = 2000; hidden_def = 2000; def_boost = 5;}else if(hidden == 79){
                hidden_hp = 3600;hidden_atk = 4000; hidden_def = 4400; def_boost = 7;}else if(hidden == 69){
                hidden_hp = 3300;hidden_atk = 3700; hidden_def = 4100; def_boost = 6;}else if(hidden == 90){
                hidden_hp = 3910;hidden_atk = 4700; hidden_def = 4710; def_boost = 8;}
        }

        if(hidden == 0){           
            hidden_hp = 0;hidden_atk = 0; hidden_def = 0;
        }
        
        defense += hidden_def;
        calculateDEF("extra");
        calculateEnemys();
    })
<?php }?>

    document.getElementById("leader").addEventListener("input",(leader)=>{
        const  quant = leader.target.value;
        
        leader_skill = quant;

        calculateDEF("extra");
        calculateEnemys();
    })
    document.getElementById("Hits").addEventListener("input", (hits)=>{
        const  quant = hits.target.value;
        defense_apart_start -= defense_hits;

        if(<?php echo($character['DEF_Per_Hit'])?> * quant <= <?php echo($character['Def_Max_Hits'])?>){
            defense_hits = (<?php echo($character['DEF_Per_Hit'])?>*quant);
        }else{
            defense_hits = (<?php echo($character['Def_Max_Hits'])?>);
        }
        defense_apart_start += defense_hits;

        calculateDEF("extra");
        calculateEnemys();
})
    document.getElementById("SAs").addEventListener("input", (SAs)=>{
        const  quant = SAs.target.value;
        defense_apart_start -= defense_SA;

        if(<?php echo($character['DEF_Per_SA'])?> * quant <= <?php echo($character['DEF_Max_Per_SA'])?>){
            defense_SA = (<?php echo($character['DEF_Per_SA'])?>*quant);
        }else{
            defense_SA = (<?php echo($character['DEF_Max_Per_SA'])?>);
        }
        defense_apart_start += defense_SA;
        document.getElementById("extra2").innerHTML += `<div>${defense_apart_start} Y ${defense_apart}</div>`;
        calculateDEF("extra");
        calculateEnemys();
})

document.getElementById("Link 1 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link1['DEF'];?>
    }else{
        defense_links -= <?php echo $Link1['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 2 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link2['DEF'];?>
    }else{
        defense_links -= <?php echo $Link2['DEF'];?>
    }
    
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 3 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link3['DEF'];?>
    }else{
        defense_links -= <?php echo $Link3['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 4 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link4['DEF'];?>
    }else{
        defense_links -= <?php echo $Link4['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 5 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link5['DEF'];?>
    }else{
        defense_links -= <?php echo $Link5['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 6 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link6['DEF'];?>
    }else{
        defense_links -= <?php echo $Link6['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})
document.getElementById("Link 7 check").addEventListener("input",(link)=>{
    if(link.target.checked){
        defense_links += <?php echo $Link7['DEF'];?>
    }else{
        defense_links -= <?php echo $Link7['DEF'];?>
    }
    calculateDEF("extra");
    calculateEnemys();
})

document.getElementById("RedZone_Future").addEventListener("click", (RZ_Future)=>{
    if (document.getElementById("Div_RZFuture").classList.contains('EventDiv')) {
        document.getElementById("Div_RZFuture").classList.remove('EventDiv');
    } else {
        document.getElementById("Div_RZFuture").classList.add('EventDiv');
    }
})

var linkDivs = document.querySelectorAll('.LinkDiv');

linkDivs.forEach(function(linkDiv) {

    var labels = linkDiv.querySelectorAll('label');
    labels.forEach(function(label) {
        if (label.textContent.trim() === '---') {

            linkDiv.style.display = 'none';
        }
    });
});
function calculateDEF(id){

    document.getElementById(id).innerHTML = "";
    let defense_moment = 0; let defense_start_of_turn = 0;
    document.getElementById(id).innerHTML += `<div>Defensa Base: ${defense}</div>`;
    defense_moment = Math.trunc(defense * ((leader_skill*2)/100 + 1));
    document.getElementById(id).innerHTML += `<div>Defensa Leader Skill: ${defense_moment}</div>`;
    defense_start_of_turn = Math.trunc(Math.trunc(defense_moment * (defense_start/100 + 1))*(defense_links/100+1));
    defense_moment = Math.trunc(defense_start_of_turn * (defense_apart_start/100 + 1));
    document.getElementById(id).innerHTML += `<div>Defensa A principio de turno: ${defense_moment}</div>`;
    defense_moment = Math.trunc(defense_start_of_turn * ((defense_apart + defense_apart_start)/100 + 1));
    document.getElementById(id).innerHTML += `<div>Defensa Aparte: ${defense_moment}</div>`;

    for(let i = 1; i-1 <= <?php echo($character['CantSA_UnCon'] + $character['CantSA_Con']);?>; i++){
        if(i > 1){
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + <?php echo $character['SA 1 def buff']?> * (i-1) + defense_sup_sa) /100 + 1));
            document.getElementById(id).innerHTML += `<div>Defensa SA ${i}: ${defenseSA}</div>`;
        }else{
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + defense_sup_sa) /100 + 1));
            document.getElementById(id).innerHTML += `<div>Defensa SA ${i}: ${defenseSA}</div>`;
        }
    }
}

function calculateEnemys(){
    calculateEnemyStats("RZFuture","1","STR","Extreme",380000,250,0,0,1);
    calculateEnemyStats("RZFuture","2","TEQ","Extreme",420000,250,0,0,1);
    calculateEnemyStats("RZFuture","3","AGL","Extreme",460000,250,30,0,1);
    calculateEnemyStats("RZFuture","4","TEQ","Extreme",490000,250,30,0,1);
    calculateEnemyStats("RZFuture","5","STR","Extreme",550000,250,0,0,1);
    calculateEnemyStats("RZFuture","6","INT","Extreme",6080000,250,30,0,1);
    calculateEnemyStats("RZFuture","7","INT","Extreme",500000,250,0,0,1);
    calculateEnemyStats("RZFuture","8","TEQ","Extreme",603050,250,1,0,2);
    calculateEnemyStats("RZFuture","9","INT","Extreme",500000,250,0,0,1);
    calculateEnemyStats("RZFuture","10","PHY","Extreme",700000,250,30,0,1);
}



function calculateEnemyStats(id,numEvent,type,clas,atk,sa_multiplier,sa_raises_atk,sa_lower_defense,cant_sa){
    ids = id + numEvent;
    let superEfective = 0;
    let defense_moment = 0; let defense_start_of_turn = 0;
    let guardMod =1; let typeMod = 1;
    if ((characterType === "TEQ" && type === "INT") || (characterType === "PHY" && type === "STR") || (characterType === "INT" && type === "PHY") || (characterType === "STR" && type === "AGL") || (characterType === "AGL" && type === "TEQ")) {
    superEfective = 2;
} else if ((characterType === "INT" && type === "TEQ") || (characterType === "STR" && type === "PHY") || (characterType === "PHY" && type === "INT") || (characterType === "AGL" && type === "STR") || (characterType === "TEQ" && type === "AGL")) {
    superEfective = 0.5;
} else {
    superEfective = 1;
}
    if(!guard){
        if (characterClass == clas){
        if(superEfective == 2){typeMod = 1.25;}else if(superEfective == 0.5){typeMod = 0.9; guardMod = 0.5;}else{typeMod = 1;}
        }else{
        if(superEfective == 2){typeMod = 1.5;}else if(superEfective == 0.5){guardMod = 0.5;}else{typeMod = 1.15;}
        }
    }else{
        guardMod = 0.5; typeMod = 0.8;
    }
  
    document.getElementById(ids).innerHTML = '<div style="height: fit-content;">';
    document.getElementById(ids).innerHTML += `<p style="margin-bottom: 10px;"> Basic attacks:</p>`
    defense_moment = Math.trunc(defense * ((leader_skill*2)/100 + 1));
    defense_start_of_turn = (Math.trunc(Math.trunc(defense_moment * (defense_start/100 + 1))*(defense_links/100+1)));
    defense_moment = Math.trunc(defense_start_of_turn * (defense_apart_start/100 + 1));
    document.getElementById(ids).innerHTML += `<p>Start of Turn: ${calculateDamage(atk, typeMod, defense_moment,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
    defense_moment = Math.trunc(defense_start_of_turn * ((defense_apart + defense_apart_start)/100 + 1));

    for(let i = 1; i-1 <= <?php echo($character['CantSA_UnCon'] + $character['CantSA_Con']);?>; i++){
        if(i > 1){
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + <?php echo $character['SA 1 def buff']?> * (i-1) + defense_sup_sa) /100 + 1));
            document.getElementById(ids).innerHTML += `<p>Defense SA ${i}: ${calculateDamage(atk, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
        }else{
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + defense_sup_sa) /100 + 1));
            document.getElementById(ids).innerHTML += `<p>Defense SA ${i}: ${calculateDamage(atk, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
        }
    }
    document.getElementById(ids).innerHTML += `</div>`
    
    ids = ids + numEvent;
    let sa_damage = 0;

    sa_damage = atk * ((sa_multiplier+sa_raises_atk)/100);
    document.getElementById(ids).innerHTML = "";
    document.getElementById(ids).innerHTML += `<div style="margin-bottom: 10px;"> SA :</div>`
    defense_moment = Math.trunc(defense * ((leader_skill*2)/100 + 1));
    defense_start_of_turn = (Math.trunc(Math.trunc(defense_moment * (defense_start/100 + 1))*(defense_links/100+1)));
    defense_moment = Math.trunc(defense_start_of_turn * (defense_apart_start/100 + 1));
    document.getElementById(ids).innerHTML += `<div>Start of Turn: ${calculateDamage(sa_damage, typeMod, defense_moment,sa_lower_defense,guardMod,superEfective,def_boost)}</div>`;
    defense_moment = Math.trunc(defense_start_of_turn * ((defense_apart + defense_apart_start)/100 + 1));

    for(let i = 1; i-1 <= <?php echo($character['CantSA_UnCon'] + $character['CantSA_Con']);?>; i++){
        if(i > 1){
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + <?php echo $character['SA 1 def buff']?> * (i-1) + defense_sup_sa) /100 + 1));
            document.getElementById(ids).innerHTML += `<div>Defense SA ${i}: ${calculateDamage(sa_damage, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</div>`;
        }else{
            defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + defense_sup_sa) /100 + 1));
            document.getElementById(ids).innerHTML += `<div>Defense SA ${i}: ${calculateDamage(sa_damage, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</div>`;
        }
    }

    if(sa_raises_atk > 0){
        for(let i = 1; i <= cant_sa; i++){
            idse = ids + i;

            atks = atk * (sa_raises_atk*i/100+1);
            document.getElementById(idse).innerHTML = '<div style="height: fit-content;">';
            document.getElementById(idse).innerHTML += `<p style="margin-bottom: 10px;"> Post SA ${i}:</p>`
            defense_moment = Math.trunc(defense * ((leader_skill*2)/100 + 1));
            defense_start_of_turn = (Math.trunc(Math.trunc(defense_moment * (defense_start/100 + 1))*(defense_links/100+1)));
            defense_moment = Math.trunc(defense_start_of_turn * (defense_apart_start/100 + 1));
            document.getElementById(idse).innerHTML += `<p>Start of Turn: ${calculateDamage(atks, typeMod, defense_moment,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
            defense_moment = Math.trunc(defense_start_of_turn * ((defense_apart + defense_apart_start)/100 + 1));

            for(let i = 1; i-1 <= <?php echo($character['CantSA_UnCon'] + $character['CantSA_Con']);?>; i++){
                if(i > 1){
                    defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + <?php echo $character['SA 1 def buff']?> * (i-1) + defense_sup_sa) /100 + 1));
                    document.getElementById(idse).innerHTML += `<p>Defense SA ${i}: ${calculateDamage(atks, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
                }else{
                    defenseSA = Math.trunc(defense_moment * ((<?php echo $character['SA 2 def buff']?> + defense_sup_sa) /100 + 1));
                    document.getElementById(idse).innerHTML += `<p>Defense SA ${i}: ${calculateDamage(atks, typeMod, defenseSA,sa_lower_defense,guardMod,superEfective,def_boost)}</p>`;
                }
            }
         document.getElementById(ids).innerHTML += `</div>`
        }
    }
}
 



function calculateDamage(stat, typeMod, def,lowerDefense, guardMod, superEfective,def_boost){
    let result1 = ""; let result2 = "";
    if(superEfective === 0.5){      
        if (Math.trunc((((stat*(1)*(typeMod-0.01*def_boost)*(1-(dr/100)))-(def*(1-lowerDefense)))* guardMod)) < 0) {
            result1 = 9; result2 = 132;}else{
            result1 = Math.trunc((((stat*1*(typeMod-0.01*def_boost)*(1-(dr/100)))-(def*(1-lowerDefense)))* guardMod)); 
            result2 = Math.trunc((((stat*1.03*(typeMod-0.01*def_boost)*(1-(dr/100)))-(def*(1-lowerDefense)))* guardMod));
        }
    }else{  
     
        if (Math.trunc(stat * 1 * typeMod * (1 - (dr / 100)) - (def * (1 - lowerDefense) * guardMod) < 0)) {
            result1 = 9; result2 = 132;
        }else{
            result1 = Math.trunc((stat*(1)*typeMod*(1-(dr/100)))-(def*(1-lowerDefense)* guardMod));
            result2 = Math.trunc((stat*1.03*typeMod*(1-(dr/100)))-(def*(1-lowerDefense)* guardMod));
        }
    }
    return (result1 + " - " + result2);
}














function max(maxStatDef, statDef, maxStatAtk,statAtk){
    document.getElementById("extra").innerHTML += maxStatDef;
    console.log(statDef);
    console.log(maxStatAtk);
    console.log(statAtk);
    if(statDef != 0 && statAtk != 0){

        return Math.Ceil(Math.max(maxStatDef / statDef, maxStatAtk / statAtk));
    }else if(statDef != 0){
        return Math.Ceil(maxStatDef / statDef);
    }else if(statAtk != 0){
        return Math.Ceil(maxStatAtk / statAtk);
    }else{
        return 1;
    }
}

document.addEventListener("DOMContentLoaded",function(){
    var inCon = document.querySelectorAll('.InputContainer');

    inCon.forEach(function(input){
        var select = input.querySelector('input[type="number"]');
        if(parseFloat(select.getAttribute('Max')) != 0){
            input.style.display = 'inline-block';
        }
    })
})
</script>