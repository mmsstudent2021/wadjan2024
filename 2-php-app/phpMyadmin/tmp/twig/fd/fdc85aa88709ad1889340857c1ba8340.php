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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_5101e47cb51295b6d7aa701da28f9e17 extends Template
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
        if ( !twig_test_empty(($context["columns"] ?? null))) {
            // line 2
            echo "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["row"] ?? null)), "html", null, true);
            echo "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["columns"] ?? null)), "html", null, true);
            echo "\">
  <fieldset class=\"pma-fieldset\" id=\"fieldset_user_priv\">
    <legend data-submenu-label=\"";
echo _gettext("Table");
            // line 6
            echo "\">
      ";
echo _gettext("Table-specific privileges");
            // line 8
            echo "    </legend>
    <p>
      <small><em>";
echo _gettext("Note: MySQL privilege names are expressed in English.");
            // line 10
            echo "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
echo _gettext("Allows reading data.");
            // line 15
            echo "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 20
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_0 = ($context["row"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Select_priv"] ?? null) : null) == "Y") || (($__internal_compile_1 = $context["curr_col_privs"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Select"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 21
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
echo _gettext("Select all");
            // line 29
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 32
            echo "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 35
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 37
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 42
            echo "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 47
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_2 = ($context["row"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Insert_priv"] ?? null) : null) == "Y") || (($__internal_compile_3 = $context["curr_col_privs"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Insert"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 48
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
echo _gettext("Select all");
            // line 56
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 59
            echo "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 62
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 64
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
echo _gettext("Allows changing data.");
            // line 69
            echo "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 74
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_4 = ($context["row"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Update_priv"] ?? null) : null) == "Y") || (($__internal_compile_5 = $context["curr_col_privs"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Update"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 75
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
echo _gettext("Select all");
            // line 83
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 86
            echo "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 89
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 91
            echo "      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
echo _gettext("Has no effect in this MySQL version.");
            // line 96
            echo "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 101
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "\"";
                echo (((((($__internal_compile_6 = ($context["row"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["References_priv"] ?? null) : null) == "Y") || (($__internal_compile_7 = $context["curr_col_privs"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["References"] ?? null) : null))) ? (" selected") : (""));
                echo ">
            ";
                // line 102
                echo twig_escape_filter($this->env, $context["curr_col"], "html", null, true);
                echo "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
echo _gettext("Select all");
            // line 110
            echo "        </button>
      </div>

      <em>";
echo _gettext("Or");
            // line 113
            echo "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
echo _pgettext("None privileges", "None");
            // line 116
            echo "\">
        ";
echo _pgettext("None privileges", "None");
            // line 118
            echo "      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting data.");
            // line 124
            echo "\"";
            echo ((((($__internal_compile_8 = ($context["row"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Delete_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows deleting data.");
            // line 127
            echo "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new tables.");
            // line 136
            echo "\"";
            echo ((((($__internal_compile_9 = ($context["row"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Create_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new tables.");
            // line 139
            echo "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
echo _gettext("Allows dropping tables.");
            // line 148
            echo "\"";
            echo ((((($__internal_compile_10 = ($context["row"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Drop_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows dropping tables.");
            // line 151
            echo "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 160
            echo "\"";
            // line 161
            echo ((((($__internal_compile_11 = ($context["row"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Grant_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 164
            echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 173
            echo "\"";
            echo ((((($__internal_compile_12 = ($context["row"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Index_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 176
            echo "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 185
            echo "\"";
            echo ((((($__internal_compile_13 = ($context["row"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Alter_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 188
            echo "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
            // line 197
            echo "\"";
            echo ((((($__internal_compile_14 = ($context["row"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
            // line 200
            echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 209
            echo "\"";
            echo ((((($__internal_compile_15 = ($context["row"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Show view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 212
            echo "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping triggers.");
            // line 221
            echo "\"";
            echo ((((($__internal_compile_16 = ($context["row"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Trigger_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping triggers.");
            // line 224
            echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 231) || twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Delete_history_priv", [], "array", true, true, false, 231))) {
                // line 232
                echo "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting historical rows.");
                // line 234
                echo "\"";
                // line 235
                echo (((((($__internal_compile_17 = ($context["row"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Delete versioning rows_priv"] ?? null) : null) == "Y") || ((($__internal_compile_18 = ($context["row"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["Delete_history_priv"] ?? null) : null) == "Y"))) ? (" checked") : (""));
                echo ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
echo _gettext("Allows deleting historical rows.");
                // line 238
                echo "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 245
            echo "    </div>
    <div class=\"clearfloat\"></div>
  </fieldset>

";
        } else {
            // line 250
            echo "
";
            // line 251
            $context["grant_count"] = 0;
            // line 252
            echo "<fieldset class=\"pma-fieldset\" id=\"fieldset_user_global_rights\">
  <legend data-submenu-label=\"";
            // line 254
            if (($context["is_global"] ?? null)) {
echo _gettext("Global");
            } elseif (            // line 256
($context["is_database"] ?? null)) {
echo _gettext("Database");
            } else {
echo _gettext("Table");
            }
            // line 260
            echo "\">
    ";
            // line 261
            if (($context["is_global"] ?? null)) {
                // line 262
                echo "      ";
echo _gettext("Global privileges");
                // line 263
                echo "    ";
            } elseif (($context["is_database"] ?? null)) {
                // line 264
                echo "      ";
echo _gettext("Database-specific privileges");
                // line 265
                echo "    ";
            } else {
                // line 266
                echo "      ";
echo _gettext("Table-specific privileges");
                // line 267
                echo "    ";
            }
            // line 268
            echo "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
echo _gettext("Check all");
            echo "\">
    <label for=\"addUsersForm_checkall\">";
echo _gettext("Check all");
            // line 269
            echo "</label>
  </legend>
  <p>
    <small><em>";
echo _gettext("Note: MySQL privilege names are expressed in English.");
            // line 272
            echo "</em></small>
  </p>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
echo _gettext("Check all");
            // line 277
            echo "\">
      <label for=\"checkall_Data_priv\">";
echo _gettext("Data");
            // line 278
            echo "</label>
    </legend>

    <div class=\"item\">
      ";
            // line 282
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 283
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
echo _gettext("Allows reading data.");
            // line 284
            echo "\"";
            echo ((((($__internal_compile_19 = ($context["row"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Select_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows reading data.");
            // line 287
            echo "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 295
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 296
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 297
            echo "\"";
            echo ((((($__internal_compile_20 = ($context["row"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Insert_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows inserting and replacing data.");
            // line 300
            echo "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 308
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 309
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
echo _gettext("Allows changing data.");
            // line 310
            echo "\"";
            echo ((((($__internal_compile_21 = ($context["row"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Update_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows changing data.");
            // line 313
            echo "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 321
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 322
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
echo _gettext("Allows deleting data.");
            // line 323
            echo "\"";
            echo ((((($__internal_compile_22 = ($context["row"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Delete_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows deleting data.");
            // line 326
            echo "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 333
            if (($context["is_global"] ?? null)) {
                // line 334
                echo "      <div class=\"item\">
        ";
                // line 335
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 336
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
echo _gettext("Allows importing data from and exporting data into files.");
                // line 337
                echo "\"";
                echo ((((($__internal_compile_23 = ($context["row"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["File_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows importing data from and exporting data into files.");
                // line 340
                echo "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 347
            echo "  </fieldset>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
echo _gettext("Check all");
            // line 351
            echo "\">
      <label for=\"checkall_Structure_priv\">";
echo _gettext("Structure");
            // line 352
            echo "</label>
    </legend>

    <div class=\"item\">
      ";
            // line 356
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 357
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 358
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows creating new databases and tables.");
            } else {
echo _gettext("Allows creating new tables.");
            }
            // line 362
            echo "\"";
            echo ((((($__internal_compile_24 = ($context["row"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Create_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 366
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows creating new databases and tables.");
            } else {
echo _gettext("Allows creating new tables.");
            }
            // line 370
            echo "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 378
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 379
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 380
            echo "\"";
            echo ((((($__internal_compile_25 = ($context["row"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Alter_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows altering the structure of existing tables.");
            // line 383
            echo "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 391
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 392
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 393
            echo "\"";
            echo ((((($__internal_compile_26 = ($context["row"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Index_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating and dropping indexes.");
            // line 396
            echo "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 404
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 405
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 406
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows dropping databases and tables.");
            } else {
echo _gettext("Allows dropping tables.");
            }
            // line 410
            echo "\"";
            echo ((((($__internal_compile_27 = ($context["row"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Drop_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 414
            if (($context["is_database"] ?? null)) {
echo _gettext("Allows dropping databases and tables.");
            } else {
echo _gettext("Allows dropping tables.");
            }
            // line 418
            echo "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 426
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 427
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating temporary tables.");
            // line 428
            echo "\"";
            echo ((((($__internal_compile_28 = ($context["row"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Create_tmp_table_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating temporary tables.");
            // line 431
            echo "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 439
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 440
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 441
            echo "\"";
            echo ((((($__internal_compile_29 = ($context["row"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["Show_view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 444
            echo "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 452
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 453
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating stored routines.");
            // line 454
            echo "\"";
            echo ((((($__internal_compile_30 = ($context["row"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["Create_routine_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows creating stored routines.");
            // line 457
            echo "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 465
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 466
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
echo _gettext("Allows altering and dropping stored routines.");
            // line 467
            echo "\"";
            echo ((((($__internal_compile_31 = ($context["row"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["Alter_routine_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows altering and dropping stored routines.");
            // line 470
            echo "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 478
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 479
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
echo _gettext("Allows executing stored routines.");
            // line 480
            echo "\"";
            echo ((((($__internal_compile_32 = ($context["row"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["Execute_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows executing stored routines.");
            // line 483
            echo "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 490
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 490)) {
                // line 491
                echo "      <div class=\"item\">
        ";
                // line 492
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 493
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
                // line 494
                echo "\"";
                echo ((((($__internal_compile_33 = ($context["row"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["Create_view_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
                // line 497
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 504
            echo "
    ";
            // line 505
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 505)) {
                // line 506
                echo "      <div class=\"item\">
        ";
                // line 507
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 508
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating new views.");
                // line 509
                echo "\"";
                echo ((((($__internal_compile_34 = ($context["row"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["Create View_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating new views.");
                // line 512
                echo "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 519
            echo "
    ";
            // line 520
            if (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 520)) {
                // line 521
                echo "      <div class=\"item\">
        ";
                // line 522
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 523
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
echo _gettext("Allows to set up events for the event scheduler.");
                // line 524
                echo "\"";
                echo ((((($__internal_compile_35 = ($context["row"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["Event_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows to set up events for the event scheduler.");
                // line 527
                echo "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 535
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 536
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating and dropping triggers.");
                // line 537
                echo "\"";
                echo ((((($__internal_compile_36 = ($context["row"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["Trigger_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating and dropping triggers.");
                // line 540
                echo "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 547
            echo "  </fieldset>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
echo _gettext("Check all");
            // line 551
            echo "\">
      <label for=\"checkall_Administration_priv\">";
echo _gettext("Administration");
            // line 552
            echo "</label>
    </legend>

    ";
            // line 555
            if (($context["is_global"] ?? null)) {
                // line 556
                echo "      <div class=\"item\">
        ";
                // line 557
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 558
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 559
                echo "\"";
                echo ((((($__internal_compile_37 = ($context["row"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["Grant_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 562
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 570
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 571
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 572
                echo "\"";
                // line 573
                echo ((((($__internal_compile_38 = ($context["row"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["Super_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 576
                echo "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 584
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 585
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
echo _gettext("Allows viewing processes of all users.");
                // line 586
                echo "\"";
                echo ((((($__internal_compile_39 = ($context["row"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["Process_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows viewing processes of all users.");
                // line 589
                echo "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 597
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 598
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 599
                echo "\"";
                echo ((((($__internal_compile_40 = ($context["row"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["Reload_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 602
                echo "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 610
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 611
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
echo _gettext("Allows shutting down the server.");
                // line 612
                echo "\"";
                echo ((((($__internal_compile_41 = ($context["row"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["Shutdown_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows shutting down the server.");
                // line 615
                echo "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 623
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 624
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
echo _gettext("Gives access to the complete list of databases.");
                // line 625
                echo "\"";
                echo ((((($__internal_compile_42 = ($context["row"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["Show_db_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Gives access to the complete list of databases.");
                // line 628
                echo "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 635
                echo "      <div class=\"item\">
        ";
                // line 636
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 637
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 638
                echo "\"";
                // line 639
                echo ((((($__internal_compile_43 = ($context["row"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["Grant_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 642
                echo "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 649
            echo "
    <div class=\"item\">
      ";
            // line 651
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 652
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
echo _gettext("Allows locking tables for the current thread.");
            // line 653
            echo "\"";
            echo ((((($__internal_compile_44 = ($context["row"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["Lock_tables_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
echo _gettext("Allows locking tables for the current thread.");
            // line 656
            echo "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 664
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 665
            echo "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
echo _gettext("Has no effect in this MySQL version.");
            // line 666
            echo "\"";
            echo ((((($__internal_compile_45 = ($context["row"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["References_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
            echo ">
      <label for=\"checkbox_References_priv\">
        <code>
          ";
            // line 670
            echo "          <dfn title=\"";
            echo twig_escape_filter($this->env, ((($context["supports_references_privilege"] ?? null)) ? (_gettext("Allows creating foreign key relations.")) : (((($context["is_mariadb"] ?? null)) ? (_gettext("Not used on MariaDB.")) : (_gettext("Not used for this MySQL version."))))), "html", null, true);
            echo "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 677
            if (($context["is_global"] ?? null)) {
                // line 678
                echo "      <div class=\"item\">
        ";
                // line 679
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 680
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 681
                echo "\"";
                echo ((((($__internal_compile_46 = ($context["row"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["Repl_client_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 684
                echo "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 692
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 693
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
echo _gettext("Needed for the replication replicas.");
                // line 694
                echo "\"";
                echo ((((($__internal_compile_47 = ($context["row"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["Repl_slave_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Needed for the replication replicas.");
                // line 697
                echo "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 705
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 706
                echo "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
echo _gettext("Allows creating, dropping and renaming user accounts.");
                // line 707
                echo "\"";
                echo ((((($__internal_compile_48 = ($context["row"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["Create_user_priv"] ?? null) : null) == "Y")) ? (" checked") : (""));
                echo ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
echo _gettext("Allows creating, dropping and renaming user accounts.");
                // line 710
                echo "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 717
            echo "  </fieldset>

  ";
            // line 719
            if (($context["is_global"] ?? null)) {
                // line 720
                echo "    <fieldset class=\"pma-fieldset\">
      <legend>";
echo _gettext("Resource limits");
                // line 721
                echo "</legend>
      <p>
        <small><em>";
echo _gettext("Note: Setting these options to 0 (zero) removes the limit.");
                // line 723
                echo "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 729
                echo "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 735
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 735) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 735)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 735), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 736
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 742
                echo "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 748
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 748) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 748)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 748), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 749
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of new connections the user may open per hour.");
                // line 755
                echo "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 761
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 761) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 761)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 761), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of new connections the user may open per hour.");
                // line 762
                echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
echo _gettext("Limits the number of simultaneous connections the user may have.");
                // line 768
                echo "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 774
                (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 774) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 774)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 774), "html", null, true))) : (print ("0")));
                echo "\" title=\"";
echo _gettext("Limits the number of simultaneous connections the user may have.");
                // line 775
                echo "\">
      </div>
    </fieldset>

    <fieldset class=\"pma-fieldset\">
      <legend>SSL</legend>
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
echo _gettext("Does not require SSL-encrypted connections.");
                // line 784
                echo "\" value=\"NONE\"";
                // line 785
                echo ((((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 785) == "NONE") || (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 785) == ""))) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
echo _gettext("Requires SSL-encrypted connections.");
                // line 793
                echo "\" value=\"ANY\"";
                // line 794
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 794) == "ANY")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
echo _gettext("Requires a valid X509 certificate.");
                // line 802
                echo "\" value=\"X509\"";
                // line 803
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803) == "X509")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 811
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 811) == "SPECIFIED")) ? (" checked") : (""));
                echo ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 822
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 822), "html", null, true);
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a specific cipher method be used for a connection.");
                // line 823
                echo "\"";
                // line 824
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 824) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 831
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 831), "html", null, true);
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a valid X509 certificate issued by this CA be presented.");
                // line 832
                echo "\"";
                // line 833
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 833) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 840
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 840), "html", null, true);
                echo "\" size=\"80\" title=\"";
echo _gettext("Requires that a valid X509 certificate with this subject be presented.");
                // line 841
                echo "\"";
                // line 842
                echo (((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 842) != "SPECIFIED")) ? (" disabled") : (""));
                echo ">
          </div>
        </div>
      </div>
    </fieldset>
  ";
            }
            // line 848
            echo "
  <div class=\"clearfloat\"></div>
</fieldset>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 851
            echo twig_escape_filter($this->env, (($context["grant_count"] ?? null) - ((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 851)) ? (1) : (0))), "html", null, true);
            echo "\">

";
        }
        // line 854
        echo "
";
        // line 855
        if (($context["has_submit"] ?? null)) {
            // line 856
            echo "  <fieldset id=\"fieldset_user_privtable_footer\" class=\"pma-fieldset tblFooters\">
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 858
            echo "\">
  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "server/privileges/privileges_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1569 => 858,  1564 => 856,  1562 => 855,  1559 => 854,  1553 => 851,  1548 => 848,  1539 => 842,  1537 => 841,  1533 => 840,  1523 => 833,  1521 => 832,  1517 => 831,  1507 => 824,  1505 => 823,  1501 => 822,  1487 => 811,  1477 => 803,  1475 => 802,  1464 => 794,  1462 => 793,  1451 => 785,  1449 => 784,  1438 => 775,  1434 => 774,  1427 => 768,  1418 => 762,  1414 => 761,  1407 => 755,  1398 => 749,  1394 => 748,  1387 => 742,  1378 => 736,  1374 => 735,  1367 => 729,  1358 => 723,  1353 => 721,  1349 => 720,  1347 => 719,  1343 => 717,  1334 => 710,  1326 => 707,  1323 => 706,  1321 => 705,  1311 => 697,  1303 => 694,  1300 => 693,  1298 => 692,  1288 => 684,  1280 => 681,  1277 => 680,  1275 => 679,  1272 => 678,  1270 => 677,  1259 => 670,  1252 => 666,  1249 => 665,  1247 => 664,  1237 => 656,  1229 => 653,  1226 => 652,  1224 => 651,  1220 => 649,  1211 => 642,  1204 => 639,  1202 => 638,  1199 => 637,  1197 => 636,  1194 => 635,  1185 => 628,  1177 => 625,  1174 => 624,  1172 => 623,  1162 => 615,  1154 => 612,  1151 => 611,  1149 => 610,  1139 => 602,  1131 => 599,  1128 => 598,  1126 => 597,  1116 => 589,  1108 => 586,  1105 => 585,  1103 => 584,  1093 => 576,  1086 => 573,  1084 => 572,  1081 => 571,  1079 => 570,  1069 => 562,  1061 => 559,  1058 => 558,  1056 => 557,  1053 => 556,  1051 => 555,  1046 => 552,  1042 => 551,  1035 => 547,  1026 => 540,  1018 => 537,  1015 => 536,  1013 => 535,  1003 => 527,  995 => 524,  992 => 523,  990 => 522,  987 => 521,  985 => 520,  982 => 519,  973 => 512,  965 => 509,  962 => 508,  960 => 507,  957 => 506,  955 => 505,  952 => 504,  943 => 497,  935 => 494,  932 => 493,  930 => 492,  927 => 491,  925 => 490,  916 => 483,  908 => 480,  905 => 479,  903 => 478,  893 => 470,  885 => 467,  882 => 466,  880 => 465,  870 => 457,  862 => 454,  859 => 453,  857 => 452,  847 => 444,  839 => 441,  836 => 440,  834 => 439,  824 => 431,  816 => 428,  813 => 427,  811 => 426,  801 => 418,  795 => 414,  788 => 410,  782 => 406,  780 => 405,  778 => 404,  768 => 396,  760 => 393,  757 => 392,  755 => 391,  745 => 383,  737 => 380,  734 => 379,  732 => 378,  722 => 370,  716 => 366,  709 => 362,  703 => 358,  701 => 357,  699 => 356,  693 => 352,  689 => 351,  682 => 347,  673 => 340,  665 => 337,  662 => 336,  660 => 335,  657 => 334,  655 => 333,  646 => 326,  638 => 323,  635 => 322,  633 => 321,  623 => 313,  615 => 310,  612 => 309,  610 => 308,  600 => 300,  592 => 297,  589 => 296,  587 => 295,  577 => 287,  569 => 284,  566 => 283,  564 => 282,  558 => 278,  554 => 277,  546 => 272,  540 => 269,  534 => 268,  531 => 267,  528 => 266,  525 => 265,  522 => 264,  519 => 263,  516 => 262,  514 => 261,  511 => 260,  505 => 256,  502 => 254,  499 => 252,  497 => 251,  494 => 250,  487 => 245,  478 => 238,  471 => 235,  469 => 234,  465 => 232,  463 => 231,  454 => 224,  446 => 221,  435 => 212,  427 => 209,  416 => 200,  408 => 197,  397 => 188,  389 => 185,  378 => 176,  370 => 173,  359 => 164,  352 => 161,  350 => 160,  339 => 151,  331 => 148,  320 => 139,  312 => 136,  301 => 127,  293 => 124,  285 => 118,  281 => 116,  276 => 113,  270 => 110,  263 => 105,  254 => 102,  247 => 101,  243 => 100,  237 => 96,  229 => 91,  225 => 89,  220 => 86,  214 => 83,  207 => 78,  198 => 75,  191 => 74,  187 => 73,  181 => 69,  173 => 64,  169 => 62,  164 => 59,  158 => 56,  151 => 51,  142 => 48,  135 => 47,  131 => 46,  125 => 42,  117 => 37,  113 => 35,  108 => 32,  102 => 29,  95 => 24,  86 => 21,  79 => 20,  75 => 19,  69 => 15,  61 => 10,  56 => 8,  52 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/privileges_table.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/server/privileges/privileges_table.twig");
    }
}
