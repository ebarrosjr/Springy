<?php
/**	\file
 * 	\brief Controller for the main page.
 *
 *  \ingroup    controllers
 *  \copyright  Copyright (c) 2007-2016 FVAL Consultoria e Informática Ltda.\n
 *  \author     Fernando Val - fernando.val@gmail.com
 */
class Index_Controller
{
    /**
     *  \brief Método principal (default).
     *
     *  Este método é executado se nenhum outro método for definido na URI para ser chamado, quando essa controladora é chamada.
     */
    public function _default()
    {
        $date = date('F j, Y');

        FW\Kernel::debug('Exemplo de debug 1');
        FW\Kernel::debug('Exemplo de debug 2', 'Exemplo com título');
        FW\Kernel::debug('Exemplo de debug 3', 'Título do Exemplo 3', false, false);

        $tpl = new FW\Template();
        $tpl->assign('date', $date);
        $tpl->display();
    }
}
