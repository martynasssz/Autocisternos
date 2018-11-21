<?php

function getVolume($w, $d, $l) {
	return $w*$d*$l; 
}

function getTankCount($m_3,$vol){
	
	return ceil($vol/$m_3);
}

function getTankPrice($m_3) {
	return ceil($m_3*0.75+50);
}