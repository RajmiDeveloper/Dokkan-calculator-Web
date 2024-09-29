<?PHP include("conection.php");?>

<h2>Add a new character</h2>

<Form action="index.php" method="POST">
    <div id="divName">
        <main>
            <section>
                <h3>Primary info</h3>
                <article>
                    <p>Name:</p> <input type="text" name="name">
                </article>
                <article>
                    <p>subName:</p> <input type="text" name="subName">
                </article>
                <article>
                    <select name="type" id="">
                        <option value="STR">STR</option>
                        <option value="PHY">PHY</option>
                        <option value="INT">INT</option>
                        <option value="TEQ">TEQ</option>
                        <option value="AGL">AGL</option>
                    </select>
                </article>
                <select name="class" >
                    <option value="super">Super</option>
                    <option value="extreme">Extreme</option>
                </select> 
                <select name="rarity" id="">
                    <option value="LR">LR</option>
                    <option value="UR">TUR</option>
                    <option value="SSR">SSR</option>
                    <option value="SR">SR</option>
                    <option value="R">R</option>
                    <option value="N">N</option>
                </select> 
                <article>
                    <p>HP:</p><input type="number" name="HP">
                </article>
                <article>
                    <p>ATK:</p><input type="number" name="ATK">
                </article>
                <article>
                    <p>DEF:</p><input type="number" name="DEF">
                </article>
                <article>
                    <p>Release date:</p><input type="date" name="release_date" value="2015-01-29">
                </article>
            </section>
            
            <section>
                <h3>SA info</h3>
                <h4 style="padding-left: 2%;">SA 1 (Min ki sa)</h4>
                <article>
                <p>SA ATK buff:</p> <input type="number" name="SA1atkbuff" value="0">
                </article>
                <article>
                <p>Amount turn SA ATK buff:</p> <input type="number" min=0 max=99 name="turnsSA1atkbuff" value="0">
                </article>
                <article>
                <p>SA Multiplier:</p>
                <select name="SA 1 multiplier" id="">
                    <option value="low">low</option>
                    <option value="damage">damage</option>
                    <option value="huge/destructive">huge/destructive</option>
                    <option value="extreme/mass">extreme/mass</option>
                    <option value="supreme">supreme</option>
                    <option value="inmense">inmense</option>
                    <option value="colossal">colossal</option>
                    <option value="mega-colossal">mega-colossal</option>
                </select>
                </article>
                <article>
                <p>SA DEF buff:</p> <input type="number" name="SA1defbuff" value="0">
                </article>
                <article>
                <p>Amount turn SA DEF buff:</p> <input type="number" min=0 max=99 name="turnsSA1defbuff" value="0">
                </article>
                <article>
                <p>KI SA:</p> <input type="number" min=0 max=24 name="SA1ki" value="0">
                </article>

                <h4 style="padding-left: 2%;">SA 2 (Max ki sa)</h4>
                <article>
                <p>SA ATK buff:</p> <input type="number" name="SA2atkbuff" value="0">
                </article>
                <article>
                <p>Amount turn SA ATK buff:</p> <input type="number" min=0 max=99 name="turnsSA2atkbuff" value="0">
                </article>
                <article>
                <p>SA Multiplier:</p> 
                <select name="SA 2 multiplier" id="">
                    <option value="low">low</option>
                    <option value="damage">damage</option>
                    <option value="huge/destructive">huge/destructive</option>
                    <option value="extreme/mass">extreme/mass</option>
                    <option value="supreme">supreme</option>
                    <option value="inmense">inmense</option>
                    <option value="colossal">colossal</option>
                    <option value="mega-colossal">mega-colossal</option>
                </select>
                </article>
                <article>
                <p>SA DEF buff:</p> <input type="number" name="SA2defbuff" value="0">
                </article>
                <article>
                <p>Amount turn SA DEF buff:</p> <input type="number" min=0 max=99 name="turnsSA2defbuff" value="0">
                </article>
                <article>
                <p>KI SA:</p> <input type="number" min=0 max=24 name="SA2ki" value="0">
                </article>
            </section>

            <section>
                <h3>Passive Skill info</h3>
                <article>
                    <p>base buff</p><input type="number" name="BaseATK" placeholder="ATK" value="0"><input type="number" name="BaseDEF" placeholder="DEF" value="0">
                </article>
                <article>
                    <p>for X turns buff</p><input type="number" name="turnsATK" placeholder="ATK" value="0"><input type="number" name="turnsDEF" placeholder="DEF" value="0"><input type="number" name="turnsStats" placeholder="turns" value="0">
                </article>
                <article>
                    <p>Stat per enemy</p><input type="number" placeholder="ATK" name="ATKxEnemy" value="0"> <input type="number" placeholder="DEF" name="DEFxEnemy" value="0"><input type="number" min=0 max=7 placeholder="Start counting at ... enemy" style="width:170px;" name="startCountingEnemy" value="0">
                    <input type="number" placeholder="ATK_Max" name="ATKxEnemy_Max" value="0"><input type="number" placeholder="DEF_Max" name="DEFxEnemy_Max" value="0">
                </article>
                <article>
                    <p>Stat per enemy when launch a SA</p><input type="number" placeholder="ATK" name="ATKxEnemySA" value="0"> <input type="number" placeholder="DEF" name="DEFxEnemySA" value="0"><input type="number" min=0 max=7 placeholder="Start counting at ... enemy" style="width:170px;" name="startCountingEnemySA" value="0">
                    <input type="number" placeholder="ATK_Max" name="ATKxEnemySA_Max" value="0"><input type="number" placeholder="DEF_Max" name="DEFxEnemySA_Max" value="0">
                </article>
                <article>
                    <p>Stat with HP 1</p><input type="number" placeholder="ATK" name="ATKxHP1" value="0"> <input type="number" placeholder="DEF" name="DEFxHP1" value="0"><input type="number" name="HPcondition1" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article>
                    <p>Stat with HP 2</p><input type="number" placeholder="ATK" name="ATKxHP2" value="0"> <input type="number" placeholder="DEF" name="DEFxHP2" value="0"><input type="number" name="HPcondition2" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article>
                    <p>Stat with HP 3</p><input type="number" placeholder="ATK" name="ATKxHP3" value="0"> <input type="number" placeholder="DEF" name="DEFxHP3" value="0"><input type="number" name="HPcondition3" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article>
                    <p>Stat if enemy it's ___ category/class</p><input type="number" placeholder="ATK" name="ATK_ConEnemy" value="0"><input type="number" placeholder="DEF" name="DEF_ConEnemy" value="0">
                </article>
                <article>
                    <p>Stat per ally ___</p><input type="number" placeholder="ATK" name="ATK_PerAlly" value="0"><input type="number" placeholder="DEF" name="DEF_PerAlly" value="0"><input type="number" name="ATK_Max_PerAlly" placheholder="MaxATK" value="0"><input type="number" name="DEF_Max_PerAlly" placeholder="Max DEF" value="0">
                </article>
                <article>
                    <p>Stat if an allie is ___</p><input type="number" placeholder="ATK" name="ATK_ConAllie" value="0"><input type="number" placeholder="DEF" name="DEF_ConAllie" value="0"><input type="number" placeholder="Quantity" name="Cant_Allies" min=0 max=7 style="width:70px;" value="0">
                </article>
                <article>
                    <p>Stat if an allie isn't ___</p><input type="number" placeholder="ATK" name="ATK_NoAllie" value="0"><input type="number" placeholder="DEF" name="DEF_NoAllie" value="0">
                </article>
                <article>
                    <p>Stat per Ki orb</p><input type="number" placeholder="ATK" name="ATK_PerORB" value="0"><input type="number" placeholder="DEF" name="DEF_PerORB" value="0">
                </article>
                <article>
                    <p>Stat per Ki orb on SA</p><input type="number" placeholder="ATK" name="ATK_PerORB_SA" value="0"><input type="number" placeholder="DEF" name="DEF_PerORB_SA" value="0">
                </article>
                <article>
                    <p>Stat when is the first attacker</p><input type="number" placeholder="ATK" name="ATK_ATSlot1" value="0"><input type="number" placeholder="DEF" name="DEF_ATSlot1" value="0">
                    <p>Stat when is the second attacker</p><input type="number" placeholder="ATK" name="ATK_ATSlot2" value="0"><input type="number" placeholder="DEF" name="DEF_ATSlot2" value="0">
                    <p>Stat when is the third attacker</p><input type="number" placeholder="ATK" name="ATK_ATSlot3" value="0"><input type="number" placeholder="DEF" name="DEF_ATSlot3" value="0">
                </article>
                <article>
                    <p>Stat when slot 1</p><input type="number" placeholder="ATK" name="ATK_Slot1" value="0"><input type="number" placeholder="DEF" name="DEF_Slot1" value="0">
                    <p>Stat when slot 2</p><input type="number" placeholder="ATK" name="ATK_Slot2" value="0"><input type="number" placeholder="DEF" name="DEF_Slot2" value="0">
                    <p>Stat when slot 3</p><input type="number" placeholder="ATK" name="ATK_Slot3" value="0"><input type="number" placeholder="DEF" name="DEF_Slot3" value="0">
                </article>
                <article>
                    <p>Stat with X chance 1</p><input type="number" placeholder="ATK" name="ATK_Chance1" value="0"><input type="number" placeholder="DEF" name="DEF_Chance1" value="0">
                    <p>Stat with X chance 2</p><input type="number" placeholder="ATK" name="ATK_Chance2" value="0"><input type="number" placeholder="DEF" name="DEF_Chance2" value="0">
                </article>
                <article>aaaa
                    <p>Stat per hit recived</p><input type="number" name="ATK_PerHit" placeholder="ATK per hit" style="width:100px;" value="0"><input type="number" name="ATK_Max_hits" placeholder="Max hits" style="width:100px;" value="0"><input type="number" name="DEF_PerHit" placeholder="DEF per hit" style="width:100px;" value="0"><input type="number" name="DEF_Max_hits" placeholder="Max hits" style="width:100px;" value="0">
                </article>
                <article>
                    <p>Stat per guard actived</p><input type="number" name="ATK_PerGuard" placeholder="ATK per hit" style="width:100px;" value="0"><input type="number" name="ATK_Max_Guard" placeholder="Max hits" style="width:100px;" value="0"><input type="number" name="DEF_PerGuard" placeholder="DEF per hit" style="width:100px;" value="0"><input type="number" name="DEF_Max_Guard" placeholder="Max hits" style="width:100px;" value="0">
                </article>
                <article>
                    <p>Stat per attack</p><input type="number" name="ATK_PerAttack" placeholder="ATK per Attack" style="width:100px;" value="0"><input type="number" name="ATK_Max_Attack" placeholder="Max Attacks" style="width:100px;" value="0"><input type="number" name="DEF_PerAttack" placeholder="DEF per Attack" style="width:105px;" value="0"><input type="number" name="DEF_Max_Attack" placeholder="Max Attack" style="width:100px;" value="0">
                </article>
                <article>
                    <p>Stat per SA</p><input type="number" name="ATK_PerSA" placeholder="ATK per SA" style="width:100px;" value="0"><input type="number" name="ATK_Max_SA" placeholder="Max SA" style="width:100px;" value="0"><input type="number" name="DEF_PerSA" placeholder="DEF per SA" style="width:100px;" value="0"><input type="number" name="DEF_Max_SA" placeholder="Max SA" style="width:100px;" value="0">
                </article>
                <article>
                    <p>Stat Revival</p><input type="number" placeholder="ATK" name="ATK_Revival" value="0"><input type="number" placeholder="DEF" name="DEF_Revival" value="0">
                </article>
                <article>
                    <p>Stat if the ki is X</p><input type="number" placeholder="ATK" name="ATK_ConKI" value="0"><input type="number" placeholder="DEF" name="DEF_ConKI" value="0"><input type="number" placeholder="Quantity" name="KI_Con" min=0 max=24 style="width:70px;" value="0">
                </article>
                <article>
                    <p>Stat when is attacking</p><input type="number" placeholder="ATK" name="ATK_When_Attack" value="0"><input type="number" placeholder="DEF" name="DEF_When_Attack" value="0">
                </article>
                <article>
                    <p>Stat When is launching an SA</p><input type="number" placeholder="ATK" name="ATK_When_SA" value="0"><input type="number" placeholder="DEF" name="DEF_When_SA" value="0">
                </article>
                <article>
                    <p>Stat When is launching an USA</p><input type="number" placeholder="ATK" name="ATK_When_USA" value="0"><input type="number" placeholder="DEF" name="DEF_When_USA" value="0">
                </article>
                <article>
                    <p>Stat per hit dodged</p><input type="number" name="ATK_PerDodge" placeholder="ATK per Dodge" style="width:105px;" value="0"><input type="number" name="ATK_Max_Dodge" placeholder="Max Dodge" style="width:100px;" value="0"><input type="number" name="DEF_PerDodge" placeholder="DEF per Dodge" style="width:110px;" value="0"><input type="number" name="DEF_Max_Dodge" placeholder="Max Dodge" style="width:100px;" value="0"><input type="number" placeholder="Quantity Turns" name="Cant_TurnDodge" min=0 max=99 style="width:100px;" value="0">
                </article>
                <article>
                    <p>Stat if Hit recived</p><input type="number" placeholder="ATK" name="ATK_HitRecived" value="0"><input type="number" placeholder="DEF" name="DEF_HitRecived" value="0"><input type="number" placeholder="Quantity" name="Cant_TurnHit" min=0 max=99 style="width:70px;" value="0"><p>Instant:</p><input type="checkbox" name="Hit_Instant">
                </article>
                <article>
                    <p>Stat Final Blow</p><input type="number" placeholder="ATK" name="ATK_FinalBlow" value="0"><input type="number" placeholder="DEF" name="DEF_FinalBlow" value="0">
                </article>
                <article>
                    <p>Stat with HP 1 When Attacking</p><input type="number" placeholder="ATK" name="ATKxHP1A" value="0"> <input type="number" placeholder="DEF" name="DEFxHP1A" value="0"><input type="number" name="HPAcondition1" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article>
                    <p>Stat with HP 2 When Attacking</p><input type="number" placeholder="ATK" name="ATKxHP2A" value="0"> <input type="number" placeholder="DEF" name="DEFxHP2A" value="0"><input type="number" name="HPAcondition2" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article>
                    <p>Stat with HP 3 When Attacking</p><input type="number" placeholder="ATK" name="ATKxHP3A" value="0"> <input type="number" placeholder="DEF" name="DEFxHP3A" value="0"><input type="number" name="HPAcondition3" min=0 max=100 placeholder="HP" value="0">
                </article>
                <article style="display: block;">
                    <p>Unconditional DR</p><input type="number" name="UnConDR" min=0 max=100 value="0">
                    <p>Conditional DR</p><input type="number" name="ConDR" min=0 max=100 value="0">
                </article>
                <article>
                    <p>Unconditional Guard</p><input type="checkbox" name="UnCon_Guard">
                    <p>Conditional Guard</p><input type="checkbox" name="Con_Guard">
                </article>
                <article style="display: block;">
                    <p>Cant SA Unconditionals</p><input type="number" placeholder="Cant SAs" name="CantSA_UnCon" value="1">
                    <p>Cant SA Conditionals</p><input type="number" placeholder="Cant SAs" name="CantSA_Con" value="0">
                </article>
            </section>
            <section>
                <h3>Active Skill</h3>
                <article>
                    <p>multiplier</p>
                    <select name="Active_Multiplier" id="">
                        <option value="none">None</option>
                    </select>
                </article>
            </section>
            <section>
                <h3>Links</h3>

                <?php

                    
                    for($i = 1; $i < 8; $i++){
                        echo "<select name='Link".$i."'>";
                        $link = "SELECT Name FROM `links`";
                        $linkConnect = mysqli_query($con, $link);
                        $j = 0;
                            while($LinksNames = mysqli_fetch_array($linkConnect)){
                                echo "<option value='".$LinksNames[$j]."'>".$LinksNames[$j]."</option>";
                                $j=$j++;
                            }
                        echo "</select>";
                    }
                ?>

            </section>
            <section>
                <h3>Fixed Values</h3>
                <article>
                    <p>Base Stats</p>
                    <input type="number" name="Base_ATKf" value="0" placeholder="ATK">
                    <input type="number" name="Base_DEFf" value="0" placeholder="DEF">
                </article>
                <article>
                    <p>HP condition</p>
                    <input type="number" name="HPf_Con" value="0" placeholder="Con">
                    <input type="number" name="ATK_HPf" value="0" placeholder="ATK">
                    <input type="number" name="DEF_HPf" value="0" placeholder="DEF">
                </article>
                <article>
                    <p>KI condition</p>
                    <input type="number" name="KIf_Con" value="0" placeholder="Con">
                    <input type="number" name="ATK_KIf" value="0" placeholder="ATK">
                    <input type="number" name="DEF_KIf" value="0" placeholder="DEF">
                </article>
                <article>
                    <p>When Launch an SA</p>
                    <input type="number" name="ATK_WhenSAf" value="0" placeholder="ATK">
                    <input type="number" name="DEF_WhenSAf" value="0" placeholder="DEF">
                </article>
                <article>
                    <p>Final Blow</p>
                    <input type="number" name="ATK_FinalBlowf" value="0" placeholder="ATK">
                    <input type="number" name="DEF_FinalBlowf" value="0" placeholder="DEF">
                </article>

            </section>
            <section>
                <h3>Special hidden</h3>
                <input type="number" name="SHP_ATK" placeholder="ATK" value="0"><input type="number" name="SHP_DEF" placeholder="DEF" value="0"><input type="number" name="SHP_HP" placeholder="HP" value="0">
            </section>
            <input type="submit" style="margin: 3% 0% 3% 5%;" value="Send Character" name="send">
            <input type="hidden" value="newCharacter" name="body">
            <input type="hidden" value="Sended" name="SendValue">
        </main>
    </div>
</Form>
<?php 
    if(isset($_POST['send'])){
        
        $Name=isset($_REQUEST['name'])?$_REQUEST['name']:null;
        $subName=isset($_REQUEST['subName'])?$_REQUEST['subName']:null;
        $type = isset($_REQUEST['type'])?$_REQUEST['type']:null;
        $class = isset($_REQUEST['class'])?$_REQUEST['class']:null;
        $rarity = isset($_REQUEST['rarity'])?$_REQUEST['rarity']:null;
        $HP = isset($_REQUEST['HP'])?$_REQUEST['HP']:null;
        $ATK = isset($_REQUEST['ATK'])?$_REQUEST['ATK']:null;
        $DEF = isset($_REQUEST['DEF'])?$_REQUEST['DEF']:null;
        $release_date = isset($_REQUEST['release_date'])?$_REQUEST['release_date']:null;
        $SA1atkBuff = isset($_REQUEST['SA1atkbuff'])?$_REQUEST['SA1atkbuff']:0;
        $SA1atkTurn = isset($_REQUEST['turnsSA1atkbuff'])?$_REQUEST['turnsSA1atkbuff']:0;
        $SA1multiplier = isset($_REQUEST['SA 1 multiplier'])?$_REQUEST['SA 1 multiplier']:null;
        $SA1defBuff = isset($_REQUEST['SA1defbuff'])?$_REQUEST['SA1defbuff']:0;
        $turnsSA1defbuff = isset($_REQUEST['turnsSA1defbuff'])?$_REQUEST['turnsSA1defbuff']:0;
        $SA1ki = isset($_REQUEST['SA1ki'])?$_REQUEST['SA1ki']:null;
        $SA2atkBuff = isset($_REQUEST['SA2atkbuff'])?$_REQUEST['SA2atkbuff']:0;
        $turnsSA2atkBuff = isset($_REQUEST['turnsSA2atkbuff'])?$_REQUEST['turnsSA2atkbuff']:0;
        $SA2multiplier = isset($_REQUEST['SA 2 multiplier'])?$_REQUEST['SA 2 multiplier']:null;
        $SA2defBuff = isset($_REQUEST['SA2defbuff'])?$_REQUEST['SA2defbuff']:0;
        $turnsSA2defbuff = isset($_REQUEST['turnsSA2defbuff'])?$_REQUEST['turnsSA2defbuff']:0;
        $SA2ki = isset($_REQUEST['SA2ki'])?$_REQUEST['SA2ki']:null;
        $BaseATK = isset($_REQUEST['BaseATK'])?$_REQUEST['BaseATK']:null;
        $BaseDEF = isset($_REQUEST['BaseDEF'])?$_REQUEST['BaseDEF']:null;
        $turnsATK = isset($_REQUEST['turnsATK'])?$_REQUEST['turnsATK']:null;
        $turnsDEF = isset($_REQUEST['turnsDEF'])?$_REQUEST['turnsDEF']:null;
        $turns_Stats = isset($_REQUEST['turnsStats'])?$_REQUEST['turnsStats']:null;
        $ATKxEnemy = isset($_REQUEST['ATKxEnemy'])?$_REQUEST['ATKxEnemy']:null;
        $DEFxEnemy = isset($_REQUEST['DEFxEnemy'])?$_REQUEST['DEFxEnemy']:null;
        $startCountingEnemy = isset($_REQUEST['startCountingEnemy'])?$_REQUEST['startCountingEnemy']:null;
        $ATKxEnemy_Max = isset($_REQUEST['ATKxEnemy_Max'])?$_REQUEST['ATKxEnemy_Max']:null;
        $DEFxEnemy_Max = isset($_REQUEST['DEFxEnemy_Max'])?$_REQUEST['DEFxEnemy_Max']:null;
        $ATKxEnemySA = isset($_REQUEST['ATKxEnemySA'])?$_REQUEST['ATKxEnemySA']:null;
        $DEFxEnemySA = isset($_REQUEST['DEFxEnemySA'])?$_REQUEST['DEFxEnemySA']:null;
        $startCountingEnemySA = isset($_REQUEST['startCountingEnemySA'])?$_REQUEST['startCountingEnemySA']:null;
        $ATKxEnemySA_Max = isset($_REQUEST['ATKxEnemySA_Max'])?$_REQUEST['ATKxEnemySA_Max']:null;
        $DEFxEnemySA_Max = isset($_REQUEST['DEFxEnemySA_Max'])?$_REQUEST['DEFxEnemySA_Max']:null;
        $ATKxHP1 = isset($_REQUEST['ATKxHP1'])?$_REQUEST['ATKxHP1']:null;
        $DEFxHP1 = isset($_REQUEST['DEFxHP1'])?$_REQUEST['DEFxHP1']:null;
        $HPcondition1 = isset($_REQUEST['HPcondition1'])?$_REQUEST['HPcondition1']:null;
        $ATKxHP2 = isset($_REQUEST['ATKxHP2'])?$_REQUEST['ATKxHP2']:null;
        $DEFxHP2 = isset($_REQUEST['DEFxHP2'])?$_REQUEST['DEFxHP2']:null;
        $HPcondition2 = isset($_REQUEST['HPcondition2'])?$_REQUEST['HPcondition2']:null;
        $ATKxHP3 = isset($_REQUEST['ATKxHP3'])?$_REQUEST['ATKxHP3']:null;
        $DEFxHP3 = isset($_REQUEST['DEFxHP3'])?$_REQUEST['DEFxHP3']:null;
        $HPcondition3 = isset($_REQUEST['HPcondition3'])?$_REQUEST['HPcondition3']:null;
        $ATK_ConEnemy = isset($_REQUEST['ATK_ConEnemy'])?$_REQUEST['ATK_ConEnemy']:null;
        $DEF_ConEnemy = isset($_REQUEST['DEF_ConEnemy'])?$_REQUEST['DEF_ConEnemy']:null;
        $ATK_PerAlly = isset($_REQUEST['ATK_PerAlly'])?$_REQUEST['ATK_PerAlly']:null;
        $DEF_PerAlly = isset($_REQUEST['DEF_PerAlly'])?$_REQUEST['DEF_PerAlly']:null;
        $ATK_Max_PerAlly = isset($_REQUEST['ATK_Max_PerAlly'])?$_REQUEST['ATK_Max_PerAlly']:null;
        $DEF_Max_PerAlly = isset($_REQUEST['DEF_Max_PerAlly'])?$_REQUEST['DEF_Max_PerAlly']:null;
        $ATK_ConAllie = isset($_REQUEST['ATK_ConAllie'])?$_REQUEST['ATK_ConAllie']:null;
        $DEF_ConAllie = isset($_REQUEST['DEF_ConAllie'])?$_REQUEST['DEF_ConAllie']:null;
        $Cant_Allies = isset($_REQUEST['Cant_Allies'])?$_REQUEST['Cant_Allies']:null;
        $ATK_NoAllie = isset($_REQUEST['ATK_NoAllie'])?$_REQUEST['ATK_NoAllie']:null;
        $DEF_NoAllie = isset($_REQUEST['DEF_NoAllie'])?$_REQUEST['DEF_NoAllie']:null;
        $ATK_PerORB = isset($_REQUEST['ATK_PerORB'])?$_REQUEST['ATK_PerORB']:null;
        $DEF_PerORB = isset($_REQUEST['DEF_PerORB'])?$_REQUEST['DEF_PerORB']:null;
        $ATK_PerORB_SA = isset($_REQUEST['ATK_PerORB_SA'])?$_REQUEST['ATK_PerORB_SA']:null;
        $DEF_PerORB_SA = isset($_REQUEST['DEF_PerORB_SA'])?$_REQUEST['DEF_PerORB_SA']:null;
        $ATK_ATSlot1 = isset($_REQUEST['ATK_ATSlot1'])?$_REQUEST['ATK_ATSlot1']:null;
        $DEF_ATSlot1 = isset($_REQUEST['DEF_ATSlot1'])?$_REQUEST['DEF_ATSlot1']:null;
        $ATK_ATSlot2 = isset($_REQUEST['ATK_ATSlot2'])?$_REQUEST['ATK_ATSlot2']:null;
        $DEF_ATSlot2 = isset($_REQUEST['DEF_ATSlot2'])?$_REQUEST['DEF_ATSlot2']:null;
        $ATK_ATSlot3 = isset($_REQUEST['ATK_ATSlot3'])?$_REQUEST['ATK_ATSlot3']:null;
        $DEF_ATSlot3 = isset($_REQUEST['DEF_ATSlot3'])?$_REQUEST['DEF_ATSlot3']:null;
        $ATK_Slot1 = isset($_REQUEST['ATK_Slot1'])?$_REQUEST['ATK_Slot1']:null;
        $DEF_Slot1 = isset($_REQUEST['DEF_Slot1'])?$_REQUEST['DEF_Slot1']:null;
        $ATK_Slot2 = isset($_REQUEST['ATK_Slot2'])?$_REQUEST['ATK_Slot2']:null;
        $DEF_Slot2 = isset($_REQUEST['DEF_Slot2'])?$_REQUEST['DEF_Slot2']:null;
        $ATK_Slot3 = isset($_REQUEST['ATK_Slot3'])?$_REQUEST['ATK_Slot3']:null;
        $DEF_Slot3 = isset($_REQUEST['DEF_Slot3'])?$_REQUEST['DEF_Slot3']:null;
        $ATK_Chance1 = isset($_REQUEST['ATK_Chance1'])?$_REQUEST['ATK_Chance1']:null;
        $DEF_Chance1 = isset($_REQUEST['DEF_Chance1'])?$_REQUEST['DEF_Chance1']:null;
        $ATK_Chance2 = isset($_REQUEST['ATK_Chance2'])?$_REQUEST['ATK_Chance2']:null;
        $DEF_Chance2 = isset($_REQUEST['DEF_Chance2'])?$_REQUEST['DEF_Chance2']:null;
        $ATK_PerHit = isset($_REQUEST['ATK_PerHit'])?$_REQUEST['ATK_PerHit']:null;
        $ATK_Max_hits = isset($_REQUEST['ATK_Max_hits'])?$_REQUEST['ATK_Max_hits']:null;
        $DEF_PerHit = isset($_REQUEST['DEF_PerHit'])?$_REQUEST['DEF_PerHit']:null;
        $DEF_Max_hits = isset($_REQUEST['DEF_Max_hits'])?$_REQUEST['DEF_Max_hits']:null;
        $ATK_PerGuard = isset($_REQUEST['ATK_PerGuard'])?$_REQUEST['ATK_PerGuard']:null;
        $ATK_Max_Guard = isset($_REQUEST['ATK_Max_Guard'])?$_REQUEST['ATK_Max_Guard']:null;
        $DEF_PerGuard = isset($_REQUEST['DEF_PerGuard'])?$_REQUEST['DEF_PerGuard']:null;
        $DEF_Max_Guard = isset($_REQUEST['DEF_Max_Guard'])?$_REQUEST['DEF_Max_Guard']:null;
        $ATK_PerAttack = isset($_REQUEST['ATK_PerAttack'])?$_REQUEST['ATK_PerAttack']:null;
        $ATK_Max_Attack = isset($_REQUEST['ATK_Max_Attack'])?$_REQUEST['ATK_Max_Attack']:null;
        $DEF_PerAttack = isset($_REQUEST['DEF_PerAttack'])?$_REQUEST['DEF_PerAttack']:null;
        $DEF_Max_Attack = isset($_REQUEST['DEF_Max_Attack'])?$_REQUEST['DEF_Max_Attack']:null;
        $ATK_PerSA = isset($_REQUEST['ATK_PerSA'])?$_REQUEST['ATK_PerSA']:null;
        $ATK_Max_SA = isset($_REQUEST['ATK_Max_SA'])?$_REQUEST['ATK_Max_SA']:null;
        $DEF_PerSA = isset($_REQUEST['DEF_PerSA'])?$_REQUEST['DEF_PerSA']:null;
        $DEF_Max_SA = isset($_REQUEST['DEF_Max_SA'])?$_REQUEST['DEF_Max_SA']:null;
        $ATK_Revival = isset($_REQUEST['ATK_Revival'])?$_REQUEST['ATK_Revival']:null;
        $DEF_Revival = isset($_REQUEST['DEF_Revival'])?$_REQUEST['DEF_Revival']:null;
        $ATK_ConKI = isset($_REQUEST['ATK_ConKI'])?$_REQUEST['ATK_ConKI']:null;
        $DEF_ConKI = isset($_REQUEST['DEF_ConKI'])?$_REQUEST['DEF_ConKI']:null;
        $KI_Con = isset($_REQUEST['KI_Con'])?$_REQUEST['KI_Con']:null;
        $ATK_When_Attack = isset($_REQUEST['ATK_When_Attack'])?$_REQUEST['ATK_When_Attack']:null;
        $DEF_When_Attack = isset($_REQUEST['DEF_When_Attack'])?$_REQUEST['DEF_When_Attack']:null;
        $ATK_When_SA = isset($_REQUEST['ATK_When_SA'])?$_REQUEST['ATK_When_SA']:null;
        $DEF_When_SA = isset($_REQUEST['DEF_When_SA'])?$_REQUEST['DEF_When_SA']:null;
        $ATK_When_USA = isset($_REQUEST['ATK_When_USA'])?$_REQUEST['ATK_When_USA']:null;
        $DEF_When_USA = isset($_REQUEST['DEF_When_USA'])?$_REQUEST['DEF_When_USA']:null;
        $ATK_PerDodge = isset($_REQUEST['ATK_PerDodge'])?$_REQUEST['ATK_PerDodge']:null;
        $ATK_Max_Dodge = isset($_REQUEST['ATK_Max_Dodge'])?$_REQUEST['ATK_Max_Dodge']:null;
        $DEF_PerDodge = isset($_REQUEST['DEF_PerDodge'])?$_REQUEST['DEF_PerDodge']:null;
        $DEF_Max_Dodge = isset($_REQUEST['DEF_Max_Dodge'])?$_REQUEST['DEF_Max_Dodge']:null;
        $Cant_TurnDodge = isset($_REQUEST['Cant_TurnDodge'])?$_REQUEST['Cant_TurnDodge']:null;
        $ATK_HitRecived = isset($_REQUEST['ATK_HitRecived'])?$_REQUEST['ATK_HitRecived']:null;
        $DEF_HitRecived = isset($_REQUEST['DEF_HitRecived'])?$_REQUEST['DEF_HitRecived']:null;
        $Cant_TurnHit = isset($_REQUEST['Cant_TurnHit'])?$_REQUEST['Cant_TurnHit']:null;
        $Hit_Instant = isset($_REQUEST['Hit_Instant'])?1:0;
        $ATK_FinalBlow = isset($_REQUEST['ATK_FinalBlow'])?$_REQUEST['ATK_FinalBlow']:null;
        $DEF_FinalBlow = isset($_REQUEST['DEF_FinalBlow'])?$_REQUEST['DEF_FinalBlow']:null;
        $ATKxHP1A = isset($_REQUEST['ATKxHP1A'])?$_REQUEST['ATKxHP1A']:null;
        $DEFxHP1A = isset($_REQUEST['DEFxHP1A'])?$_REQUEST['DEFxHP1A']:null;
        $HPA_condition1 = isset($_REQUEST['HPAcondition1'])?$_REQUEST['HPAcondition1']:null;
        $ATKxHP2A = isset($_REQUEST['ATKxHP2A'])?$_REQUEST['ATKxHP2A']:null;
        $DEFxHP2A = isset($_REQUEST['DEFxHP2A'])?$_REQUEST['DEFxHP2A']:null;
        $HPA_condition2 = isset($_REQUEST['HPAcondition2'])?$_REQUEST['HPAcondition2']:null;
        $ATKxHP3A = isset($_REQUEST['ATKxHP3A'])?$_REQUEST['ATKxHP3A']:null;
        $DEFxHP3A = isset($_REQUEST['DEFxHP3A'])?$_REQUEST['DEFxHP3A']:null;
        $HPA_condition3 = isset($_REQUEST['HPAcondition3'])?$_REQUEST['HPAcondition3']:null;
        $UnConDR = isset($_REQUEST['UnConDR'])?$_REQUEST['UnConDR']:null;
        $ConDR = isset($_REQUEST['ConDR'])?$_REQUEST['ConDR']:null;
        $UnCon_Guard = isset($_REQUEST['UnCon_Guard'])?1:0;
        $Con_Guard = isset($_REQUEST['Con_Guard'])?1:0;
        $CantSA_UnCon = isset($_REQUEST['CantSA_UnCon'])?$_REQUEST['CantSA_UnCon']:null;
        $CantSA_Con = isset($_REQUEST['CantSA_Con'])?$_REQUEST['CantSA_Con']:null;
        $Active_Multiplier = isset($_REQUEST['Active_Multiplier'])?$_REQUEST['Active_Multiplier']:"none";
        $Link1 = isset($_REQUEST['Link1'])?$_REQUEST['Link1']:null;
        $Link2 = isset($_REQUEST['Link2'])?$_REQUEST['Link2']:null;
        $Link3 = isset($_REQUEST['Link3'])?$_REQUEST['Link3']:null;
        $Link4 = isset($_REQUEST['Link4'])?$_REQUEST['Link4']:null;
        $Link5 = isset($_REQUEST['Link5'])?$_REQUEST['Link5']:null;
        $Link6 = isset($_REQUEST['Link6'])?$_REQUEST['Link6']:null;
        $Link7 = isset($_REQUEST['Link7'])?$_REQUEST['Link7']:null;
        $SHP_ATK = isset($_REQUEST['SHP_ATK'])?$_REQUEST['SHP_ATK']:null;
        $SHP_DEF = isset($_REQUEST['SHP_DEF'])?$_REQUEST['SHP_DEF']:null;
        $SHP_HP = isset($_REQUEST['SHP_HP'])?$_REQUEST['SHP_HP']:null;
        $HPf_Con = isset($_REQUEST['HPf_Con'])?$_REQUEST['HPf_Con']:null;
        $ATK_HPf = isset($_REQUEST['ATK_HPf'])?$_REQUEST['ATK_HPf']:null;
        $DEF_HPf = isset($_REQUEST['DEF_HPf'])?$_REQUEST['DEF_HPf']:null;
        $KIf_Con = isset($_REQUEST['KIf_Con'])?$_REQUEST['KIf_Con']:null;
        $ATK_KIf = isset($_REQUEST['ATK_KIf'])?$_REQUEST['ATK_KIf']:null;
        $DEF_KIf = isset($_REQUEST['DEF_KIf'])?$_REQUEST['DEF_KIf']:null;
        $ATK_WhenSAf = isset($_REQUEST['ATK_WhenSAf'])?$_REQUEST['ATK_WhenSAf']:null;
        $DEF_WhenSAf = isset($_REQUEST['DEF_WhenSAf'])?$_REQUEST['DEF_WhenSAf']:null;
        $Base_ATKf= isset($_REQUEST['Base_ATKf'])?$_REQUEST['Base_ATKf']:null;
        $Base_DEFf = isset($_REQUEST['Base_DEFf'])?$_REQUEST['Base_DEFf']:null;
        $ATK_FinalBlowf = isset($_REQUEST['ATK_FinalBlowf'])?$_REQUEST['ATK_FinalBlowf']:null;
        $DEF_FinalBlowf = isset($_REQUEST['DEF_FinalBlowf'])?$_REQUEST['DEF_FinalBlowf']:null;
    /*/ $ = isset($_REQUEST[''])?$_REQUEST['']:null;
        ,'', `ATK_FinalBlowf`, `DEF_FinalBlowf
        /*/
        $insert_info = "INSERT INTO `character_info`(`Name`, `SubName`, `Type`, `Class`, `Rarity`, `HP`, `ATK`, `DEF`, `release_date`, `SA 1atk buff`, `CantTurn_ATK SA 1`, `SA 1 def buff`, `CantTurn_DEF SA 1`, `SA 1 ki`, `Multiplier SA 1`, `SA 2 atk buff`, `CantTurn_ATK SA 2`, `SA 2 def buff`, `CantTurn_DEF SA 2`, `SA 2 ki`, `Multiplier SA 2`, `Base_ATK`, `Base_DEF`, `CantTurnStat`, `TurnATK`, `TurnDEF`, `StartCountingEnemy`, `ATK_x_Enemy`, `DEF_x_Enemy`, `atk_PerEnemyMax`, `def_PerEnemyMax`, `StartCountingEnemy_SA`, `atk_PerEnemy_SA`, `def_PerEnemy_SA`, `atk_PerEnemyMax_SA`, `def_PerEnemyMax_SA`, `Con_HP+1`, `ATK_HP 1`, `DEF_HP 1`, `Con_HP+2`, `ATK_HP 2`, `DEF_HP 2`, `Con_HP+3`, `ATK_HP 3`, `DEF_HP 3`, `ATK_ConEnemy`, `DEF_ConEnemy`, `ATK_PerAlly`, `DEF_PerAlly`, `ATK_Max_PerAlly`, `DEF_Max_PerAlly`, `ATK_ConAllies`, `DEF_ConAllies`, `ATK_NoAlly`, `DEF_NoAlly`, `ATK_PerORB`, `DEF_PerORB`, `atk_PerOrb_SA`, `def_PerOrb_SA`, `ATK_ATSlot1`, `DEF_ATSlot1`, `ATK_ATSlot2`, `DEF_ATSlot2`, `ATK_ATSlot3`, `DEF_ATSlot3`, `ATK_Slot1`, `DEF_Slot1`, `ATK_Slot2`, `DEF_Slot2`, `ATK_Slot3`, `DEF_Slot3`, `ATK_Chance1`, `DEF_Chance1`, `ATK_Chance2`, `DEF_Chance2`, `ATK_Per_Hit`, `DEF_Per_Hit`, `ATK_Max_Hits`, `Def_Max_Hits`, `ATK_Guard_Active`, `DEF_Guard_Active`, `ATK_Max_Guard_Active`, `DEF_Max_Guard_Active`, `ATK_Per_attack`, `DEF_Per_attack`, `ATK_Max_Per_attack`, `DEF_Max_Per_attack`, `ATK_Per_SA`, `DEF_Per_SA`, `ATK_Max_Per_SA`, `DEF_Max_Per_SA`, `ATK_Revival`, `DEF_Revival`, `Ki condition`, `ATK_ki`, `DEF_ki`, `ATK_When_Attack`, `DEF_When_Attack`, `ATK_When_SA`, `DEF_When_SA`, `ATK_When_USA`, `DEF_When_USA`, `ATK_Dodge`, `DEF_Dodge`, `ATK_Max_Dodge`, `DEF_Max_Dodge`, `CantTurnHit`, `Instant`, `ATK_Hit`, `DEF_Hit`, `ATK_FinalBlow`, `DEF_FinalBlow`, `HP+_Con_Attacking1`, `ATK_HP_Attacking1`, `DEF_HP_Attacking1`, `HP+_Con_Attacking2`, `ATK_HP_Attacking2`, `DEF_HP_Attacking2`, `HP+_Con_Attacking3`, `ATK_HP_Attacking3`, `DEF_HP_Attacking3`, `UnCon_DR`, `Con_DR`, `Con_Guard`, `UnCon_Guard`, `CantSA_UnCon`, `CantSA_Con`, `Active_Multiplier`, `Link 1`, `Link 2`, `Link 3`, `Link 4`, `Link 5`, `Link 6`, `Link 7`, `special_hidden_atk`, `special_hidden_def`, `special_hidden_hp`, `HPf`, `ATK_HPf`, `DEF_HPf`, `KI_Conf`, `ATK_KIf`, `DEF_KIf`,`ATK_WhenSAf`, `DEF_WhenSAf`, `Base_ATKf`, `Base_DEFf`, `ATK_FinalBlowf`, `DEF_FinalBlowf`) VALUES ('$Name','$subName','$type','$class','$rarity','$HP','$ATK','$DEF','$release_date','$SA1atkBuff','$SA1atkTurn','$SA1defBuff','$turnsSA1defbuff','$SA1ki','$SA1multiplier','$SA2atkBuff','$turnsSA2atkBuff','$SA2defBuff','$turnsSA2defbuff','$SA2ki','$SA2multiplier','$BaseATK','$BaseDEF','$turns_Stats','$turnsATK','$turnsDEF','$startCountingEnemy','$ATKxEnemy','$DEFxEnemy','$ATKxEnemy_Max','$DEFxEnemy_Max','$startCountingEnemySA','$ATKxEnemySA','$DEFxEnemySA','$ATKxEnemySA_Max','$DEFxEnemySA_Max','$HPcondition1','$ATKxHP1','$DEFxHP1','$HPcondition2','$ATKxHP2','$DEFxHP2','$HPcondition3','$ATKxHP3','$DEFxHP3','$ATK_ConEnemy','$DEF_ConEnemy','$ATK_PerAlly','$DEF_PerAlly','$ATK_Max_PerAlly','$DEF_Max_PerAlly','$ATK_ConAllie','$DEF_ConAllie',' $ATK_NoAllie','$DEF_NoAllie','$ATK_PerORB','$DEF_PerORB','$ATK_PerORB_SA','$DEF_PerORB_SA','$ATK_ATSlot1','$DEF_ATSlot1','$ATK_ATSlot2','$DEF_ATSlot2','$ATK_ATSlot3','$DEF_ATSlot3','$ATK_Slot1','$DEF_Slot1','$ATK_Slot2','$DEF_Slot2','$ATK_Slot3','$DEF_Slot3','$ATK_Chance1','$DEF_Chance1','$ATK_Chance2','$DEF_Chance2','$ATK_PerHit','$DEF_PerHit','$ATK_Max_hits','$DEF_Max_hits','$ATK_PerGuard','$DEF_PerGuard','$ATK_Max_Guard','$DEF_Max_Guard','$ATK_PerAttack','$DEF_PerAttack','$ATK_Max_Attack','$DEF_Max_Attack','$ATK_PerSA','$DEF_PerSA','$ATK_Max_SA','$DEF_Max_SA','$ATK_Revival','$DEF_Revival','$KI_Con','$ATK_ConKI','$DEF_ConKI','$ATK_When_Attack','$DEF_When_Attack','$ATK_When_SA','$DEF_When_SA','$ATK_When_USA','$DEF_When_USA','$ATK_PerDodge','$DEF_PerDodge','$ATK_Max_Dodge','$DEF_Max_Dodge','$Cant_TurnHit','$Hit_Instant','$ATK_HitRecived','$DEF_HitRecived','$ATK_FinalBlow','$DEF_FinalBlow','$HPA_condition1','$ATKxHP1A','$DEFxHP1A','$HPA_condition2','$ATKxHP2A','$DEFxHP2A','$HPA_condition3','$ATKxHP3A','$DEFxHP3A','$UnConDR','$ConDR','$Con_Guard','$UnCon_Guard','$CantSA_UnCon','$CantSA_Con','$Active_Multiplier','$Link1','$Link2','$Link3','$Link4','$Link5','$Link6','$Link7','$SHP_ATK','$SHP_DEF','$SHP_HP','$HPf_Con','$ATK_HPf','$DEF_HPf','$KIf_Con','$ATK_KIf','$DEF_KIf','$ATK_WhenSAf','$DEF_WhenSAf','$Base_ATKf','$Base_DEFf', '$ATK_FinalBlowf', '$DEF_FinalBlowf')";
        $end = mysqli_query($con, $insert_info);
    }
?>