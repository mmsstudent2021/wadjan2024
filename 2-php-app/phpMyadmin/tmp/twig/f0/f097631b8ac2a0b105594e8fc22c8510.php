<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* server/privileges/users_overview.twig */
class __TwigTemplate_19df8e626fd0809c798942c6085efceb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form name=\"usersForm\" id=\"usersForm\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/server/privileges");
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs();
        echo "
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">";
echo _gettext("User name");
        // line 8
        echo "</th>
          <th scope=\"col\">";
echo _gettext("Host name");
        // line 9
        echo "</th>
          <th scope=\"col\">";
echo _gettext("Password");
        // line 10
        echo "</th>
          <th scope=\"col\">
            ";
echo _gettext("Global privileges");
        // line 13
        echo "            ";
        echo PhpMyAdmin\Html\Generator::showHint("Note: MySQL privilege names are expressed in English.");
        echo "
          </th>
          ";
        // line 15
        if (($context["menus_work"] ?? null)) {
            // line 16
            echo "            <th scope=\"col\">";
echo _gettext("User group");
            echo "</th>
          ";
        }
        // line 18
        echo "          <th scope=\"col\">";
echo _gettext("Grant");
        echo "</th>";
        // line 19
        $context["action_colspan"] = 2;
        // line 20
        if ((($context["user_group_count"] ?? null) > 0)) {
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
        }
        // line 21
        if (($context["has_account_locking"] ?? null)) {
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
        }
        // line 22
        echo "          <th scope=\"col\" colspan=\"";
        echo twig_escape_filter($this->env, ($context["action_colspan"] ?? null), "html", null, true);
        echo "\">";
echo _gettext("Action");
        echo "</th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hosts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 28
            echo "          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 31) . "&amp;#27;") . twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
                ";
            // line 35
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 35))) {
                // line 36
                echo "                  <span class=\"text-danger\">";
echo _gettext("Any");
                echo "</span>
                ";
            } else {
                // line 38
                echo "                 <a class=\"edit_user_anchor\" href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                 // line 39
$context["host"], "user", [], "any", false, false, false, 39), "hostname" => twig_get_attribute($this->env, $this->source,                 // line 40
$context["host"], "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 44
                echo "\">
                 ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 45), "html", null, true);
                echo "
                 </a>
                ";
            }
            // line 48
            echo "              </label>
            </td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["host"], "has_password", [], "any", false, false, false, 52)) {
                // line 53
                echo "                ";
echo _gettext("Yes");
                // line 54
                echo "              ";
            } else {
                // line 55
                echo "                <span class=\"text-danger\">";
echo _gettext("No");
                echo "</span>
              ";
            }
            // line 57
            echo "              ";
            echo (( !twig_get_attribute($this->env, $this->source, $context["host"], "has_select_priv", [], "any", false, false, false, 57)) ? (PhpMyAdmin\Html\Generator::showHint(_gettext("The selected user was not found in the privilege table."))) : (""));
            echo "
            </td>
            <td>
              <code>";
            // line 60
            echo twig_join_filter(twig_get_attribute($this->env, $this->source, $context["host"], "privileges", [], "any", false, false, false, 60), ", ");
            echo "</code>
            </td>
            ";
            // line 62
            if (($context["menus_work"] ?? null)) {
                // line 63
                echo "              <td class=\"usrGroup\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "group", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
            ";
            }
            // line 65
            echo "            <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "has_grant", [], "any", false, false, false, 65)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
            ";
            // line 66
            if (($context["is_grantuser"] ?? null)) {
                // line 67
                echo "              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"";
                // line 68
                echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,                 // line 69
$context["host"], "user", [], "any", false, false, false, 69), "hostname" => twig_get_attribute($this->env, $this->source,                 // line 70
$context["host"], "host", [], "any", false, false, false, 70), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 74
                echo "\">
                  ";
                // line 75
                echo PhpMyAdmin\Html\Generator::getIcon("b_usredit", _gettext("Edit privileges"));
                echo "
                </a>
              </td>
            ";
            }
            // line 79
            echo "            ";
            if ((($context["menus_work"] ?? null) && (($context["user_group_count"] ?? null) > 0))) {
                // line 80
                echo "              <td class=\"text-center\">
                ";
                // line 81
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">
                    ";
                    // line 83
                    echo PhpMyAdmin\Html\Generator::getIcon("b_usrlist", _gettext("Edit user group"));
                    echo "
                  </button>
                ";
                }
                // line 86
                echo "              </td>
            ";
            }
            // line 88
            echo "            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"";
            // line 89
            echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => twig_get_attribute($this->env, $this->source,             // line 90
$context["host"], "user", [], "any", false, false, false, 90), "hostname" => twig_get_attribute($this->env, $this->source,             // line 91
$context["host"], "host", [], "any", false, false, false, 91), "initial" =>             // line 92
($context["initial"] ?? null), "export" => true]);
            // line 94
            echo "\">
                ";
            // line 95
            echo PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
            echo "
              </a>
            </td>
            ";
            // line 98
            if (($context["has_account_locking"] ?? null)) {
                // line 99
                echo "              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"";
                // line 100
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? (_gettext("Unlock this account.")) : (_gettext("Lock this account."))), "html", null, true);
                echo "\" data-is-locked=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? ("true") : ("false"));
                echo "\" data-user-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 100), "html", null, true);
                echo "\" data-host-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 100), "html", null, true);
                echo "\">
                  ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "                    ";
                    ob_start(function () { return ''; });
echo _pgettext("Unlock the account.", "Unlock");
                    $context["unlock_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 103
                    echo "                    ";
                    echo PhpMyAdmin\Html\Generator::getIcon("s_unlock", twig_escape_filter($this->env, ($context["unlock_text"] ?? null)));
                    echo "
                  ";
                } else {
                    // line 105
                    echo "                    ";
                    ob_start(function () { return ''; });
echo _pgettext("Lock the account.", "Lock");
                    $context["lock_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 106
                    echo "                    ";
                    echo PhpMyAdmin\Html\Generator::getIcon("s_lock", twig_escape_filter($this->env, ($context["lock_text"] ?? null)));
                    echo "
                  ";
                }
                // line 108
                echo "                </button>
              </td>
            ";
            }
            // line 111
            echo "          </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      <img class=\"selectallarrow\" width=\"38\" height=\"22\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
        echo "\" alt=\"";
echo _gettext("With selected:");
        echo "\">
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
        // line 121
        echo "\">
      <label for=\"usersForm_checkall\">";
echo _gettext("Check all");
        // line 122
        echo "</label>
      <em class=\"with-selected\">";
echo _gettext("With selected:");
        // line 123
        echo "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
echo _gettext("Export");
        // line 125
        echo "\">
        ";
        // line 126
        echo PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
        echo "
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["initial"] ?? null), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  ";
        // line 135
        if (($context["is_createuser"] ?? null)) {
            // line 136
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
echo _pgettext("Create new user", "New");
            // line 137
            echo "</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"";
            // line 139
            echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            echo "\">
          ";
            // line 140
            echo PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            echo "
        </a>
      </div>
    </div>
  ";
        }
        // line 145
        echo "
  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 147
        echo PhpMyAdmin\Html\Generator::getIcon("b_usrdrop", _gettext("Remove selected user accounts"));
        echo "</div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
echo _gettext("Revoke all active privileges from the users and delete them afterwards.");
        // line 149
        echo "</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          ";
echo _gettext("Drop the databases that have the same names as the users.");
        // line 154
        echo "        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"";
echo _gettext("Go");
        // line 159
        echo "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">";
echo _gettext("Edit user group");
        // line 168
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 169
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
echo _gettext("Loading…");
        // line 173
        echo "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 177
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">";
echo _gettext("Save changes");
        // line 178
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/privileges/users_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 178,  449 => 177,  442 => 173,  435 => 169,  431 => 168,  419 => 159,  411 => 154,  404 => 149,  398 => 147,  394 => 145,  386 => 140,  382 => 139,  378 => 137,  374 => 136,  372 => 135,  363 => 129,  357 => 126,  354 => 125,  349 => 123,  345 => 122,  341 => 121,  334 => 120,  326 => 113,  311 => 111,  306 => 108,  300 => 106,  295 => 105,  289 => 103,  284 => 102,  282 => 101,  272 => 100,  269 => 99,  267 => 98,  261 => 95,  258 => 94,  256 => 92,  255 => 91,  254 => 90,  253 => 89,  250 => 88,  246 => 86,  240 => 83,  235 => 82,  233 => 81,  230 => 80,  227 => 79,  220 => 75,  217 => 74,  215 => 70,  214 => 69,  213 => 68,  210 => 67,  208 => 66,  203 => 65,  197 => 63,  195 => 62,  190 => 60,  183 => 57,  177 => 55,  174 => 54,  171 => 53,  169 => 52,  164 => 50,  160 => 48,  154 => 45,  151 => 44,  149 => 40,  148 => 39,  146 => 38,  140 => 36,  138 => 35,  134 => 34,  128 => 31,  125 => 30,  121 => 28,  104 => 27,  93 => 22,  89 => 21,  85 => 20,  83 => 19,  79 => 18,  73 => 16,  71 => 15,  65 => 13,  60 => 10,  56 => 9,  52 => 8,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/users_overview.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/server/privileges/users_overview.twig");
    }
}
