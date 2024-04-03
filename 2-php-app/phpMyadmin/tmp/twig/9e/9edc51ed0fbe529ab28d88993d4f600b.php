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

/* table/relation/common_form.twig */
class __TwigTemplate_71652041a2c1c0a0da8ee32b814f01cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/relation/common_form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<form method=\"post\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/table/relation");
        echo "\">
    ";
        // line 5
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    ";
        // line 7
        echo "    ";
        if (PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null))) {
            // line 8
            echo "        <fieldset class=\"pma-fieldset mb-3\">
            <legend>";
echo _gettext("Foreign key constraints");
            // line 9
            echo "</legend>
            <div class=\"table-responsive-md jsresponsive\">
            <table class=\"relationalTable table table-striped w-auto\">
                <thead>
                <tr>
                    <th>";
echo _gettext("Actions");
            // line 14
            echo "</th>
                    <th>";
echo _gettext("Constraint properties");
            // line 15
            echo "</th>
                    ";
            // line 16
            if ((twig_upper_filter($this->env, ($context["tbl_storage_engine"] ?? null)) == "INNODB")) {
                // line 17
                echo "                        <th>
                            ";
echo _gettext("Column");
                // line 19
                echo "                            ";
                echo PhpMyAdmin\Html\Generator::showHint(_gettext("Creating a foreign key over a non-indexed column would automatically create an index on it. Alternatively, you can define an index below, before creating the foreign key."));
                echo "
                        </th>
                    ";
            } else {
                // line 22
                echo "                        <th>
                            ";
echo _gettext("Column");
                // line 24
                echo "                            ";
                echo PhpMyAdmin\Html\Generator::showHint(_gettext("Only columns with index will be displayed. You can define an index below."));
                echo "
                        </th>
                    ";
            }
            // line 27
            echo "                    <th colspan=\"3\">
                        ";
echo _gettext("Foreign key constraint");
            // line 29
            echo "                        (";
            echo twig_escape_filter($this->env, ($context["tbl_storage_engine"] ?? null), "html", null, true);
            echo ")
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>";
echo _gettext("Database");
            // line 36
            echo "</th>
                    <th>";
echo _gettext("Table");
            // line 37
            echo "</th>
                    <th>";
echo _gettext("Column");
            // line 38
            echo "</th>
                </tr></thead>
                ";
            // line 40
            $context["i"] = 0;
            // line 41
            echo "                ";
            if ( !twig_test_empty(($context["existrel_foreign"] ?? null))) {
                // line 42
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["existrel_foreign"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["one_key"]) {
                    // line 43
                    echo "                        ";
                    // line 44
                    echo "                        ";
                    $context["foreign_db"] = (((twig_get_attribute($this->env, $this->source, $context["one_key"], "ref_db_name", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_0 =                     // line 45
$context["one_key"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["ref_db_name"] ?? null) : null)))) ? ((($__internal_compile_1 =                     // line 46
$context["one_key"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ref_db_name"] ?? null) : null)) : (($context["db"] ?? null)));
                    // line 47
                    echo "                        ";
                    $context["foreign_table"] = false;
                    // line 48
                    echo "                        ";
                    if (($context["foreign_db"] ?? null)) {
                        // line 49
                        echo "                            ";
                        $context["foreign_table"] = (((twig_get_attribute($this->env, $this->source, $context["one_key"], "ref_table_name", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_2 =                         // line 50
$context["one_key"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ref_table_name"] ?? null) : null)))) ? ((($__internal_compile_3 =                         // line 51
$context["one_key"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ref_table_name"] ?? null) : null)) : (false));
                        // line 52
                        echo "                        ";
                    }
                    // line 53
                    echo "                        ";
                    $context["unique_columns"] = [];
                    // line 54
                    echo "                        ";
                    if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
                        // line 55
                        echo "                            ";
                        $context["table_obj"] = PhpMyAdmin\Table::get(($context["foreign_table"] ?? null), ($context["foreign_db"] ?? null));
                        // line 56
                        echo "                            ";
                        $context["unique_columns"] = twig_get_attribute($this->env, $this->source, ($context["table_obj"] ?? null), "getUniqueColumns", [0 => false, 1 => false], "method", false, false, false, 56);
                        // line 57
                        echo "                        ";
                    }
                    // line 58
                    echo "                        ";
                    $this->loadTemplate("table/relation/foreign_key_row.twig", "table/relation/common_form.twig", 58)->display(twig_to_array(["i" =>                     // line 59
($context["i"] ?? null), "one_key" =>                     // line 60
$context["one_key"], "column_array" =>                     // line 61
($context["column_array"] ?? null), "options_array" =>                     // line 62
($context["options_array"] ?? null), "tbl_storage_engine" =>                     // line 63
($context["tbl_storage_engine"] ?? null), "db" =>                     // line 64
($context["db"] ?? null), "table" =>                     // line 65
($context["table"] ?? null), "url_params" =>                     // line 66
($context["url_params"] ?? null), "databases" =>                     // line 67
($context["databases"] ?? null), "foreign_db" =>                     // line 68
($context["foreign_db"] ?? null), "foreign_table" =>                     // line 69
($context["foreign_table"] ?? null), "unique_columns" =>                     // line 70
($context["unique_columns"] ?? null)]));
                    // line 72
                    echo "                        ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 73
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['one_key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                ";
            }
            // line 75
            echo "                ";
            $this->loadTemplate("table/relation/foreign_key_row.twig", "table/relation/common_form.twig", 75)->display(twig_to_array(["i" =>             // line 76
($context["i"] ?? null), "one_key" => [], "column_array" =>             // line 78
($context["column_array"] ?? null), "options_array" =>             // line 79
($context["options_array"] ?? null), "tbl_storage_engine" =>             // line 80
($context["tbl_storage_engine"] ?? null), "db" =>             // line 81
($context["db"] ?? null), "table" =>             // line 82
($context["table"] ?? null), "url_params" =>             // line 83
($context["url_params"] ?? null), "databases" =>             // line 84
($context["databases"] ?? null), "foreign_db" =>             // line 85
($context["foreign_db"] ?? null), "foreign_table" =>             // line 86
($context["foreign_table"] ?? null), "unique_columns" =>             // line 87
($context["unique_columns"] ?? null)]));
            // line 89
            echo "                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 90
            echo "                <tr>
                    <th colspan=\"6\">
                        <a class=\"formelement clearfloat add_foreign_key\" href=\"\">
                            ";
echo _gettext("+ Add constraint");
            // line 94
            echo "                        </a>
                    </th>
                </tr>
            </table>
            </div>
        </fieldset>
    ";
        }
        // line 101
        echo "
    ";
        // line 102
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relationFeature", [], "any", false, false, false, 102))) {
            // line 103
            echo "        ";
            if (((($context["default_sliders_state"] ?? null) != "disabled") && PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null)))) {
                // line 104
                echo "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#internalRelationships\" aria-expanded=\"";
                // line 105
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                echo "\" aria-controls=\"internalRelationships\">
            ";
echo _gettext("Internal relationships");
                // line 107
                echo "          </button>
        </div>
        <div class=\"collapse mb-3";
                // line 109
                echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                echo "\" id=\"internalRelationships\">
        ";
            }
            // line 111
            echo "
        <fieldset class=\"pma-fieldset\">
            <legend>
                ";
echo _gettext("Internal relationships");
            // line 115
            echo "                ";
            echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_relation");
            echo "
            </legend>
            <table class=\"relationalTable table table-striped table-hover table-sm w-auto\">
                <thead>
                  <tr>
                    <th>";
echo _gettext("Column");
            // line 120
            echo "</th>
                    <th>
                      ";
echo _gettext("Internal relation");
            // line 123
            echo "                      ";
            if (PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null))) {
                // line 124
                echo "                        ";
                echo PhpMyAdmin\Html\Generator::showHint(_gettext("An internal relation is not necessary when a corresponding FOREIGN KEY relation exists."));
                echo "
                      ";
            }
            // line 126
            echo "                    </th>
                  </tr>
                </thead>
                <tbody>
                    ";
            // line 130
            $context["saved_row_cnt"] = (twig_length_filter($this->env, ($context["save_row"] ?? null)) - 1);
            // line 131
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["saved_row_cnt"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 132
                echo "                        ";
                $context["myfield"] = (($__internal_compile_4 = (($__internal_compile_5 = ($context["save_row"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Field"] ?? null) : null);
                // line 133
                echo "                        ";
                // line 135
                echo "                        ";
                $context["myfield_md5"] = (($__internal_compile_6 = ($context["column_hash_array"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["myfield"] ?? null)] ?? null) : null);
                // line 136
                echo "
                        ";
                // line 137
                $context["foreign_table"] = false;
                // line 138
                echo "                        ";
                $context["foreign_column"] = false;
                // line 139
                echo "
                        ";
                // line 141
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 141)) {
                    // line 142
                    echo "                            ";
                    $context["foreign_db"] = (($__internal_compile_7 = (($__internal_compile_8 = ($context["existrel"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["foreign_db"] ?? null) : null);
                    // line 143
                    echo "                        ";
                } else {
                    // line 144
                    echo "                            ";
                    $context["foreign_db"] = ($context["db"] ?? null);
                    // line 145
                    echo "                        ";
                }
                // line 146
                echo "
                        ";
                // line 148
                echo "                        ";
                $context["tables"] = [];
                // line 149
                echo "                        ";
                if (($context["foreign_db"] ?? null)) {
                    // line 150
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 150)) {
                        // line 151
                        echo "                                ";
                        $context["foreign_table"] = (($__internal_compile_9 = (($__internal_compile_10 = ($context["existrel"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["foreign_table"] ?? null) : null);
                        // line 152
                        echo "                            ";
                    }
                    // line 153
                    echo "                            ";
                    $context["tables"] = twig_get_attribute($this->env, $this->source, ($context["dbi"] ?? null), "getTables", [0 => ($context["foreign_db"] ?? null)], "method", false, false, false, 153);
                    // line 154
                    echo "                        ";
                }
                // line 155
                echo "
                        ";
                // line 157
                echo "                        ";
                $context["unique_columns"] = [];
                // line 158
                echo "                        ";
                if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
                    // line 159
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 159)) {
                        // line 160
                        echo "                                ";
                        $context["foreign_column"] = (($__internal_compile_11 = (($__internal_compile_12 = ($context["existrel"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["foreign_field"] ?? null) : null);
                        // line 161
                        echo "                            ";
                    }
                    // line 162
                    echo "                            ";
                    $context["table_obj"] = PhpMyAdmin\Table::get(($context["foreign_table"] ?? null), ($context["foreign_db"] ?? null));
                    // line 163
                    echo "                            ";
                    $context["unique_columns"] = twig_get_attribute($this->env, $this->source, ($context["table_obj"] ?? null), "getUniqueColumns", [0 => false, 1 => false], "method", false, false, false, 163);
                    // line 164
                    echo "                        ";
                }
                // line 165
                echo "
                        <tr>
                            <td class=\"align-middle\">
                                <strong>";
                // line 168
                echo twig_escape_filter($this->env, ($context["myfield"] ?? null), "html", null, true);
                echo "</strong>
                                <input type=\"hidden\" name=\"fields_name[";
                // line 169
                echo twig_escape_filter($this->env, ($context["myfield_md5"] ?? null), "html", null, true);
                echo "]\"
                                    value=\"";
                // line 170
                echo twig_escape_filter($this->env, ($context["myfield"] ?? null), "html", null, true);
                echo "\">
                            </td>

                            <td>
                                ";
                // line 174
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 174)->display(twig_to_array(["name" => (("destination_db[" .                 // line 175
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Database"), "values" =>                 // line 177
($context["databases"] ?? null), "foreign" =>                 // line 178
($context["foreign_db"] ?? null)]));
                // line 180
                echo "
                                ";
                // line 181
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 181)->display(twig_to_array(["name" => (("destination_table[" .                 // line 182
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Table"), "values" =>                 // line 184
($context["tables"] ?? null), "foreign" =>                 // line 185
($context["foreign_table"] ?? null)]));
                // line 187
                echo "
                                ";
                // line 188
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 188)->display(twig_to_array(["name" => (("destination_column[" .                 // line 189
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Column"), "values" =>                 // line 191
($context["unique_columns"] ?? null), "foreign" =>                 // line 192
($context["foreign_column"] ?? null)]));
                // line 194
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                </tbody>
            </table>
        </fieldset>
        ";
            // line 200
            if (((($context["default_sliders_state"] ?? null) != "disabled") && PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null)))) {
                // line 201
                echo "        </div>
        ";
            }
            // line 203
            echo "    ";
        }
        // line 204
        echo "
    ";
        // line 205
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "displayFeature", [], "any", false, false, false, 205))) {
            // line 206
            echo "        ";
            $context["disp"] = $this->env->getFunction('get_display_field')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            // line 207
            echo "        <fieldset class=\"pma-fieldset\">
            <label>";
echo _gettext("Choose column to display:");
            // line 208
            echo "</label>
            <select name=\"display_field\">
                <option value=\"\">---</option>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["save_row"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 212
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_13 = $context["row"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Field"] ?? null) : null), "html", null, true);
                echo "\"";
                // line 213
                if ((array_key_exists("disp", $context) && ((($__internal_compile_14 = $context["row"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Field"] ?? null) : null) == ($context["disp"] ?? null)))) {
                    // line 214
                    echo "                            selected=\"selected\"";
                }
                // line 215
                echo ">
                        ";
                // line 216
                echo twig_escape_filter($this->env, (($__internal_compile_15 = $context["row"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Field"] ?? null) : null), "html", null, true);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "            </select>
        </fieldset>
    ";
        }
        // line 222
        echo "
    <fieldset class=\"pma-fieldset tblFooters\">
        <input class=\"btn btn-secondary preview_sql\" type=\"button\" value=\"";
echo _gettext("Preview SQL");
        // line 224
        echo "\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Save");
        // line 225
        echo "\">
    </fieldset>
</form>

<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
echo _gettext("Loading");
        // line 233
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 234
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 239
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/relation/common_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 239,  525 => 234,  521 => 233,  510 => 225,  506 => 224,  501 => 222,  496 => 219,  487 => 216,  484 => 215,  481 => 214,  479 => 213,  475 => 212,  471 => 211,  466 => 208,  462 => 207,  459 => 206,  457 => 205,  454 => 204,  451 => 203,  447 => 201,  445 => 200,  440 => 197,  432 => 194,  430 => 192,  429 => 191,  428 => 189,  427 => 188,  424 => 187,  422 => 185,  421 => 184,  420 => 182,  419 => 181,  416 => 180,  414 => 178,  413 => 177,  412 => 175,  411 => 174,  404 => 170,  400 => 169,  396 => 168,  391 => 165,  388 => 164,  385 => 163,  382 => 162,  379 => 161,  376 => 160,  373 => 159,  370 => 158,  367 => 157,  364 => 155,  361 => 154,  358 => 153,  355 => 152,  352 => 151,  349 => 150,  346 => 149,  343 => 148,  340 => 146,  337 => 145,  334 => 144,  331 => 143,  328 => 142,  325 => 141,  322 => 139,  319 => 138,  317 => 137,  314 => 136,  311 => 135,  309 => 133,  306 => 132,  301 => 131,  299 => 130,  293 => 126,  287 => 124,  284 => 123,  279 => 120,  269 => 115,  263 => 111,  258 => 109,  254 => 107,  249 => 105,  246 => 104,  243 => 103,  241 => 102,  238 => 101,  229 => 94,  223 => 90,  220 => 89,  218 => 87,  217 => 86,  216 => 85,  215 => 84,  214 => 83,  213 => 82,  212 => 81,  211 => 80,  210 => 79,  209 => 78,  208 => 76,  206 => 75,  203 => 74,  197 => 73,  194 => 72,  192 => 70,  191 => 69,  190 => 68,  189 => 67,  188 => 66,  187 => 65,  186 => 64,  185 => 63,  184 => 62,  183 => 61,  182 => 60,  181 => 59,  179 => 58,  176 => 57,  173 => 56,  170 => 55,  167 => 54,  164 => 53,  161 => 52,  159 => 51,  158 => 50,  156 => 49,  153 => 48,  150 => 47,  148 => 46,  147 => 45,  145 => 44,  143 => 43,  138 => 42,  135 => 41,  133 => 40,  129 => 38,  125 => 37,  121 => 36,  109 => 29,  105 => 27,  98 => 24,  94 => 22,  87 => 19,  83 => 17,  81 => 16,  78 => 15,  74 => 14,  66 => 9,  62 => 8,  59 => 7,  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/common_form.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/table/relation/common_form.twig");
    }
}
