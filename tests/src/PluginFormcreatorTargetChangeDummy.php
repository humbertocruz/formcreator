<?php
/**
 * ---------------------------------------------------------------------
 * Formcreator is a plugin which allows creation of custom forms of
 * easy access.
 * ---------------------------------------------------------------------
 * LICENSE
 *
 * This file is part of Formcreator.
 *
 * Formcreator is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Formcreator is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Formcreator. If not, see <http://www.gnu.org/licenses/>.
 * ---------------------------------------------------------------------
 * @author    Thierry Bugier
 * @author    Jérémy Moreau
 * @copyright Copyright © 2011 - 2018 Teclib'
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @link      https://github.com/pluginsGLPI/formcreator/
 * @link      https://pluginsglpi.github.io/formcreator/
 * @link      http://plugins.glpi-project.org/#/plugin/formcreator
 * ---------------------------------------------------------------------
 */

namespace GlpiPlugin\Formcreator\Tests;

class PluginFormcreatorTargetChangeDummy extends \PluginFormcreatorTargetChange
{
   public static function getTable($classname = null) {
      return \PluginFormcreatorTargetChange::getTable();
   }

   public function publicGetTargetEntity(\PluginFormcreatorFormAnswer $formanswer, $requesters_id) {
      return $this->getTargetEntity($formanswer, $requesters_id);
   }

   public function publicPrepareTemplate($template, \PluginFormcreatorFormAnswer $formAnswer, $disableRichText = false) {
      return $this->prepareTemplate($template, $formAnswer, $disableRichText);
   }
}
