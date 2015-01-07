<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

/**
* i-Educar - Sistema de gestão escolar
*
* Copyright (C) 2006  Prefeitura Municipal de Itajaí
*     <ctima@itajai.sc.gov.br>
*
* Este programa é software livre; você pode redistribuí-lo e/ou modificá-lo
* sob os termos da Licença Pública Geral GNU conforme publicada pela Free
* Software Foundation; tanto a versão 2 da Licença, como (a seu critério)
* qualquer versão posterior.
*
* Este programa é distribuí­do na expectativa de que seja útil, porém, SEM
* NENHUMA GARANTIA; nem mesmo a garantia implí­cita de COMERCIABILIDADE OU
* ADEQUAÇÃO A UMA FINALIDADE ESPECÍFICA. Consulte a Licença Pública Geral
* do GNU para mais detalhes.
*
* Você deve ter recebido uma cópia da Licença Pública Geral do GNU junto
* com este programa; se não, escreva para a Free Software Foundation, Inc., no
* endereço 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
*
* @author    Lucas D'Avila <lucas@ieducativa.com.br>
* @category  i-Educar
* @license   @@license@@
* @package   Ieducativa
* @since   Arquivo disponível desde a versão ?
* @version   $Id$
*/

/**
* Ieducativa_StaticFiles_Base class.
*
* @author      Lucas D'Avila <lucas@ieducativa.com.br>
* @category    i-Educar
* @license     @@license@@
* @package     Ieducativa
* @since       Classe disponível desde a versão 1.1.0
* @version     @@package_version@@
*/
class Ieducativa_StaticFiles_Base
{

  public static $cdnPath = '';
  public static $localPath = '';

  public static function path() {
    return self::useCDN() ? static::$cdnPath : static::$localPath;
  }

  protected static function useCDN() {
    return self::config()->use_cdn == true;
  }

  protected static function config() {
    return $GLOBALS['coreExt']['Config']->app->static_files;
  }

  public static function cdnPath() {
  }

  public static function localPath() {
  }
}
