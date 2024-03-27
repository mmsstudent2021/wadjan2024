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

/* database/designer/main.twig */
class __TwigTemplate_dcd6f56d3f8f1fd623b61f16d0f7356a extends Template
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
        // line 2
        echo "<script type=\"text/javascript\">
var designerConfig = ";
        // line 3
        echo ($context["designer_config"] ?? null);
        echo ";
</script>

";
        // line 7
        if ( !($context["has_query"] ?? null)) {
            // line 8
            echo "    <div id=\"name-panel\">
        <span id=\"page_name\">
            ";
            // line 10
            echo twig_escape_filter($this->env, (((($context["selected_page"] ?? null) == null)) ? (_gettext("Untitled")) : (($context["selected_page"] ?? null))), "html", null, true);
            echo "
        </span>
        <span id=\"saved_state\">
            ";
            // line 13
            echo (((($context["selected_page"] ?? null) == null)) ? ("*") : (""));
            echo "
        </span>
    </div>
";
        }
        // line 17
        echo "<div class=\"designer_header side-menu\" id=\"side_menu\">
    <a class=\"M_butt\" id=\"key_Show_left_menu\" href=\"#\">
        <img title=\"";
echo _gettext("Show/Hide tables list");
        // line 19
        echo "\"
             alt=\"v\"
             src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2_m.png"), "html", null, true);
        echo "\"
             data-down=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2_m.png"), "html", null, true);
        echo "\"
             data-up=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/uparrow2_m.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Show/Hide tables list");
        // line 26
        echo "        </span>
    </a>
    <a href=\"#\" id=\"toggleFullscreen\" class=\"M_butt\">
        <img title=\"";
echo _gettext("View in fullscreen");
        // line 29
        echo "\"
             src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/viewInFullscreen.png"), "html", null, true);
        echo "\"
             data-enter=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/viewInFullscreen.png"), "html", null, true);
        echo "\"
             data-exit=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/exitFullscreen.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\"
              data-exit=\"";
echo _gettext("Exit fullscreen");
        // line 34
        echo "\"
              data-enter=\"";
echo _gettext("View in fullscreen");
        // line 35
        echo "\">
            ";
echo _gettext("View in fullscreen");
        // line 37
        echo "        </span>
    </a>
    <a href=\"#\" id=\"addOtherDbTables\" class=\"M_butt\">
        <img title=\"";
echo _gettext("Add tables from other databases");
        // line 40
        echo "\"
             src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/other_table.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Add tables from other databases");
        // line 44
        echo "        </span>
    </a>
    ";
        // line 46
        if ( !($context["has_query"] ?? null)) {
            // line 47
            echo "        <a id=\"newPage\" href=\"#\" class=\"M_butt\">
            <img title=\"";
echo _gettext("New page");
            // line 48
            echo "\"
                 alt=\"\"
                 src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_add.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("New page");
            // line 53
            echo "            </span>
        </a>
        <a href=\"#\" id=\"editPage\" class=\"M_butt ajax\">
            <img title=\"";
echo _gettext("Open page");
            // line 56
            echo "\"
                 src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_edit.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Open page");
            // line 60
            echo "            </span>
        </a>
        <a href=\"#\" id=\"savePos\" class=\"M_butt\">
            <img title=\"";
echo _gettext("Save page");
            // line 63
            echo "\"
                 src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/save.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Save page");
            // line 67
            echo "            </span>
        </a>
        <a href=\"#\" id=\"SaveAs\" class=\"M_butt ajax\">
            <img title=\"";
echo _gettext("Save page as");
            // line 70
            echo "\"
                 src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/save_as.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Save page as");
            // line 74
            echo "            </span>
        </a>
        <a href=\"#\" id=\"delPages\" class=\"M_butt ajax\">
            <img title=\"";
echo _gettext("Delete pages");
            // line 77
            echo "\"
                 src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_delete.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Delete pages");
            // line 81
            echo "            </span>
        </a>
        <a href=\"#\" id=\"StartTableNew\" class=\"M_butt\">
            <img title=\"";
echo _gettext("Create table");
            // line 84
            echo "\"
                 src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/table.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Create table");
            // line 88
            echo "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"rel_button\">
            <img title=\"";
echo _gettext("Create relationship");
            // line 91
            echo "\"
                 src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/relation.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Create relationship");
            // line 95
            echo "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"display_field_button\">
            <img title=\"";
echo _gettext("Choose column to display");
            // line 98
            echo "\"
                 src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/display_field.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Choose column to display");
            // line 102
            echo "            </span>
        </a>
        <a href=\"#\" id=\"reloadPage\" class=\"M_butt\">
            <img title=\"";
echo _gettext("Reload");
            // line 105
            echo "\"
                 src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/reload.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Reload");
            // line 109
            echo "            </span>
        </a>
        <a href=\"";
            // line 111
            echo PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("faq", "faq6-31");
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"M_butt\">
            <img title=\"";
echo _gettext("Help");
            // line 112
            echo "\"
                 src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/help.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Help");
            // line 116
            echo "            </span>
        </a>
    ";
        }
        // line 119
        echo "    <a href=\"#\" class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["params_array"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["angular_direct"] ?? null) : null), "html", null, true);
        echo "\" id=\"angular_direct_button\">
        <img title=\"";
echo _gettext("Angular links");
        // line 120
        echo " / ";
echo _gettext("Direct links");
        echo "\"
             src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/ang_direct.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Angular links");
        // line 123
        echo " / ";
echo _gettext("Direct links");
        // line 124
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 126
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["params_array"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["snap_to_grid"] ?? null) : null), "html", null, true);
        echo "\" id=\"grid_button\">
        <img title=\"";
echo _gettext("Snap to grid");
        // line 127
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/grid.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Snap to grid");
        // line 130
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 132
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["params_array"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["small_big_all"] ?? null) : null), "html", null, true);
        echo "\" id=\"key_SB_all\">
        <img title=\"";
echo _gettext("Small/Big All");
        // line 133
        echo "\"
             alt=\"v\"
             src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        echo "\"
             data-down=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        echo "\"
             data-right=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow1.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Small/Big All");
        // line 140
        echo "        </span>
    </a>
    <a href=\"#\" id=\"SmallTabInvert\" class=\"M_butt\">
        <img title=\"";
echo _gettext("Toggle small/big");
        // line 143
        echo "\"
             src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/bottom.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Toggle small/big");
        // line 147
        echo "        </span>
    </a>
    <a href=\"#\" id=\"relLineInvert\" class=\"";
        // line 149
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["params_array"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["relation_lines"] ?? null) : null), "html", null, true);
        echo "\" >
        <img title=\"";
echo _gettext("Toggle relationship lines");
        // line 150
        echo "\"
             src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/toggle_lines.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Toggle relationship lines");
        // line 154
        echo "        </span>
    </a>
    ";
        // line 156
        if ( !($context["visual_builder"] ?? null)) {
            // line 157
            echo "        <a href=\"#\" id=\"exportPages\" class=\"M_butt\" >
            <img title=\"";
echo _gettext("Export schema");
            // line 158
            echo "\"
                 src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/export.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Export schema");
            // line 162
            echo "            </span>
        </a>
    ";
        } else {
            // line 165
            echo "        <a id=\"build_query_button\"
           class=\"M_butt\"
           href=\"#\"
           class=\"M_butt\">
            <img title=\"";
echo _gettext("Build Query");
            // line 169
            echo "\"
                 src=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/query_builder.png"), "html", null, true);
            echo "\">
            <span class=\"hide hidable\">
                ";
echo _gettext("Build Query");
            // line 173
            echo "            </span>
        </a>
    ";
        }
        // line 176
        echo "    <a href=\"#\" class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["params_array"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["side_menu"] ?? null) : null), "html", null, true);
        echo "\" id=\"key_Left_Right\">
        <img title=\"";
echo _gettext("Move Menu");
        // line 177
        echo "\" alt=\">\"
             data-right=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/2leftarrow_m.png"), "html", null, true);
        echo "\"
             src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/2rightarrow_m.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Move Menu");
        // line 182
        echo "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 184
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["params_array"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["pin_text"] ?? null) : null), "html", null, true);
        echo "\" id=\"pin_Text\">
        <img title=\"";
echo _gettext("Pin text");
        // line 185
        echo "\"
             alt=\">\"
             data-right=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/anchor.png"), "html", null, true);
        echo "\"
             src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/anchor.png"), "html", null, true);
        echo "\">
        <span class=\"hide hidable\">
            ";
echo _gettext("Pin text");
        // line 191
        echo "        </span>
    </a>
</div>
<div id=\"canvas_outer\">
    <form action=\"\" id=\"container-form\" method=\"post\" name=\"form1\">
        <div id=\"osn_tab\">
            <canvas class=\"designer\" id=\"canvas\" width=\"100\" height=\"100\"></canvas>
        </div>
        <div id=\"layer_menu\" class=\"hide\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img title=\"";
echo _gettext("Hide/Show all");
        // line 202
        echo "\"
                        alt=\"v\"
                        id=\"key_HS_all\"
                        src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        echo "\"
                        data-down=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        echo "\"
                        data-right=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow1.png"), "html", null, true);
        echo "\">
                </a>
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img alt=\"v\"
                        id=\"key_HS\"
                        title=\"";
echo _gettext("Hide/Show tables with no relationship");
        // line 212
        echo "\"
                        src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2.png"), "html", null, true);
        echo "\"
                        data-down=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2.png"), "html", null, true);
        echo "\"
                        data-right=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow2.png"), "html", null, true);
        echo "\">
                </a>
            </div>
            <div id=\"id_scroll_tab\" class=\"scroll_tab\">
                <table class=\"table table-sm ps-1\"></table>
            </div>
            ";
        // line 222
        echo "            <div class=\"text-center\">
                ";
echo _gettext("Number of tables:");
        // line 223
        echo " <span id=\"tables_counter\">0</span>
            </div>
            <div id=\"layer_menu_sizer\">
                  <img class=\"icon float-start\"
                      id=\"layer_menu_sizer_btn\"
                      data-right=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/resizeright.png"), "html", null, true);
        echo "\"
                      src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/resize.png"), "html", null, true);
        echo "\">
            </div>
        </div>
        ";
        // line 233
        echo "        ";
        $this->loadTemplate("database/designer/database_tables.twig", "database/designer/main.twig", 233)->display(twig_to_array(["db" =>         // line 234
($context["db"] ?? null), "text_dir" =>         // line 235
($context["text_dir"] ?? null), "get_db" =>         // line 236
($context["get_db"] ?? null), "has_query" =>         // line 237
($context["has_query"] ?? null), "tab_pos" =>         // line 238
($context["tab_pos"] ?? null), "display_page" =>         // line 239
($context["display_page"] ?? null), "tab_column" =>         // line 240
($context["tab_column"] ?? null), "tables_all_keys" =>         // line 241
($context["tables_all_keys"] ?? null), "tables_pk_or_unique_keys" =>         // line 242
($context["tables_pk_or_unique_keys"] ?? null), "columns_type" =>         // line 243
($context["columns_type"] ?? null), "tables" =>         // line 244
($context["designerTables"] ?? null)]));
        // line 246
        echo "    </form>
</div>
<div id=\"designer_hint\"></div>
";
        // line 250
        echo "<table id=\"layer_new_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\" >
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless bg-white mb-0 text-center\">
                    <thead>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    ";
echo _gettext("Create relationship");
        // line 272
        echo "                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"foreign_relation\">
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    FOREIGN KEY
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"text-nowrap\">
                                on delete
                            </td>
                            <td width=\"102\">
                                <select name=\"on_delete\" id=\"on_delete\">
                                    <option value=\"nix\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-nowrap\">
                                on update
                            </td>
                            <td>
                                <select name=\"on_update\" id=\"on_update\">
                                    <option value=\"nix\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <input type=\"button\" id=\"ok_new_rel_panel\" class=\"btn btn-secondary butt\"
                                    name=\"Button\" value=\"";
echo _gettext("OK");
        // line 337
        echo "\">
                                <input type=\"button\" id=\"cancel_new_rel_panel\"
                                    class=\"btn btn-secondary butt\" name=\"Button\" value=\"";
echo _gettext("Cancel");
        // line 339
        echo "\">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 361
        echo "<table id=\"layer_upd_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\">
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless bg-white mb-0 text-center\">
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <strong>
                                ";
echo _gettext("Delete relationship");
        // line 382
        echo "                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <input id=\"del_button\" name=\"Button\" type=\"button\"
                                class=\"btn btn-secondary butt\" value=\"";
echo _gettext("Delete");
        // line 388
        echo "\">
                            <input id=\"cancel_button\" type=\"button\" class=\"btn btn-secondary butt\"
                                name=\"Button\" value=\"";
echo _gettext("Cancel");
        // line 390
        echo "\">
                        </td>
                    </tr>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 410
        if (($context["has_query"] ?? null)) {
            // line 411
            echo "    ";
            // line 412
            echo "    <table id=\"designer_optionse\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" rowspan=\"2\" id=\"option_col_name\" class=\"text-center text-nowrap\">
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"where\">
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        WHERE
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Relationship operator");
            // line 446
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"rel_opt\" id=\"rel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
echo _gettext("Except");
            // line 475
            echo "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
echo _gettext("Value");
            // line 485
            echo "                                    <br>
                                    ";
echo _gettext("subquery");
            // line 487
            echo "                                </td>
                                <td>
                                    <textarea id=\"Query\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
echo _gettext("Rename to");
            // line 496
            echo "                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("New name");
            // line 502
            echo "                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"new_name\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
echo _gettext("Aggregate");
            // line 511
            echo "                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Operator");
            // line 517
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        GROUP BY
                                    </b>
                                </td>
                                <td>
                                    <input type=\"checkbox\" value=\"groupby\" id=\"groupby\">
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        ORDER BY
                                    </b>
                                </td>
                                <td>
                                    <select name=\"orderby\" id=\"orderby\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"ASC\" >
                                            ASC
                                        </option>
                                        <option value=\"DESC\">
                                            DESC
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        HAVING
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Operator");
            // line 581
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"h_operator\" id=\"h_operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            ";
echo _gettext("None");
            // line 589
            echo "                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Relationship operator");
            // line 611
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"h_rel_opt\" id=\"h_rel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
echo _gettext("Except");
            // line 640
            echo "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Value");
            // line 650
            echo "                                    <br>
                                    ";
echo _gettext("subquery");
            // line 652
            echo "                                </td>
                                <td width=\"102\">
                                    <textarea id=\"having\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"hidden\" id=\"ok_add_object_db_and_table_name_url\" />
                                    <input type=\"hidden\" id=\"ok_add_object_db_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_table_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_col_name\" />
                                    <input type=\"button\" id=\"ok_add_object\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("OK");
            // line 666
            echo "\">
                                    <input type=\"button\" id=\"cancel_close_option\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("Cancel");
            // line 668
            echo "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 690
            echo "    <table id=\"query_rename_to\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
echo _gettext("Rename to");
            // line 712
            echo "                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("New name");
            // line 720
            echo "                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"e_rename\">
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_rename\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("OK");
            // line 730
            echo "\">
                                    <input id=\"query_rename_to_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
echo _gettext("Cancel");
            // line 734
            echo "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 756
            echo "    <table id=\"query_having\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        HAVING
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Operator");
            // line 786
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"hoperator\" id=\"hoperator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            None
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <tr>
                                    <td width=\"58\" class=\"text-nowrap\">
                                        ";
echo _gettext("Operator");
            // line 817
            echo "                                    </td>
                                    <td width=\"102\">
                                        <select name=\"hrel_opt\" id=\"hrel_opt\">
                                            <option value=\"--\" selected=\"selected\">
                                                --
                                            </option>
                                            <option value=\"=\">
                                                =
                                            </option>
                                            <option value=\"&gt;\">
                                                &gt;
                                            </option>
                                            <option value=\"&lt;\">
                                                &lt;
                                            </option>
                                            <option value=\"&gt;=\">
                                                &gt;=
                                            </option>
                                            <option value=\"&lt;=\">
                                                &lt;=
                                            </option>
                                            <option value=\"NOT\">
                                                NOT
                                            </option>
                                            <option value=\"IN\">
                                                IN
                                            </option>
                                            <option value=\"EXCEPT\">
                                                ";
echo _gettext("Except");
            // line 846
            echo "                                            </option>
                                            <option value=\"NOT IN\">
                                                NOT IN
                                            </option>
                                        </select>
                                    </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
echo _gettext("Value");
            // line 856
            echo "                                    <br>
                                    ";
echo _gettext("subquery");
            // line 858
            echo "                                </td>
                                <td>
                                    <textarea id=\"hQuery\" cols=\"18\">
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_having\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("OK");
            // line 869
            echo "\">
                                    <input id=\"query_having_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
echo _gettext("Cancel");
            // line 873
            echo "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 895
            echo "    <table id=\"query_Aggregate\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
echo _gettext("Aggregate");
            // line 917
            echo "                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Operator");
            // line 925
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"e_operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_Aggr\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("OK");
            // line 954
            echo "\">
                                    <input id=\"query_Aggregate_Button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
echo _gettext("Cancel");
            // line 958
            echo "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 980
            echo "    <table id=\"query_where\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        WHERE
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
echo _gettext("Operator");
            // line 1010
            echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"erel_opt\" id=\"erel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\" >
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
echo _gettext("Except");
            // line 1039
            echo "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
echo _gettext("Value");
            // line 1049
            echo "                                    <br>
                                    ";
echo _gettext("subquery");
            // line 1051
            echo "                                </td>
                                <td>
                                    <textarea id=\"eQuery\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_where\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
echo _gettext("OK");
            // line 1061
            echo "\">
                                    <input id=\"query_where_button\" type=\"button\" class=\"btn btn-secondary butt\" name=\"Button\"
                                           value=\"";
echo _gettext("Cancel");
            // line 1063
            echo "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 1085
            echo "    <div class=\"panel\">
        <div class=\"clearfloat\"></div>
        <div id=\"ab\"></div>
        <div class=\"clearfloat\"></div>
    </div>
    <a class=\"trigger\" href=\"#\">";
echo _gettext("Active options");
            // line 1090
            echo "</a>
";
        }
        // line 1092
        echo "<div id=\"PMA_disable_floating_menubar\"></div>
<div class=\"modal fade\" id=\"designerGoModal\" tabindex=\"-1\" aria-labelledby=\"designerGoModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerGoModalLabel\">";
echo _gettext("Loading");
        // line 1097
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Cancel");
        // line 1098
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalGoButton\">";
echo _gettext("Go");
        // line 1102
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Cancel");
        // line 1103
        echo "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerPromptModal\" tabindex=\"-1\" aria-labelledby=\"designerPromptModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerPromptModalLabel\">";
echo _gettext("Loading");
        // line 1112
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Cancel");
        // line 1113
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalYesButton\">";
echo _gettext("Yes");
        // line 1117
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalNoButton\">";
echo _gettext("No");
        // line 1118
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("Cancel");
        // line 1119
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
        // line 1124
        if (($context["visual_builder"] ?? null)) {
            // line 1125
            echo "  ";
            echo twig_include($this->env, $context, "modals/build_query.twig", ["get_db" => ($context["get_db"] ?? null)]);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "database/designer/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1596 => 1125,  1594 => 1124,  1587 => 1119,  1583 => 1118,  1579 => 1117,  1572 => 1113,  1568 => 1112,  1556 => 1103,  1552 => 1102,  1545 => 1098,  1541 => 1097,  1533 => 1092,  1529 => 1090,  1521 => 1085,  1498 => 1063,  1493 => 1061,  1480 => 1051,  1476 => 1049,  1464 => 1039,  1433 => 1010,  1401 => 980,  1378 => 958,  1371 => 954,  1339 => 925,  1329 => 917,  1305 => 895,  1282 => 873,  1275 => 869,  1261 => 858,  1257 => 856,  1245 => 846,  1214 => 817,  1181 => 786,  1149 => 756,  1126 => 734,  1119 => 730,  1106 => 720,  1096 => 712,  1072 => 690,  1049 => 668,  1044 => 666,  1027 => 652,  1023 => 650,  1011 => 640,  980 => 611,  956 => 589,  946 => 581,  880 => 517,  872 => 511,  861 => 502,  853 => 496,  842 => 487,  838 => 485,  826 => 475,  795 => 446,  759 => 412,  757 => 411,  755 => 410,  733 => 390,  728 => 388,  719 => 382,  696 => 361,  673 => 339,  668 => 337,  600 => 272,  576 => 250,  571 => 246,  569 => 244,  568 => 243,  567 => 242,  566 => 241,  565 => 240,  564 => 239,  563 => 238,  562 => 237,  561 => 236,  560 => 235,  559 => 234,  557 => 233,  551 => 229,  547 => 228,  540 => 223,  536 => 222,  527 => 215,  523 => 214,  519 => 213,  516 => 212,  507 => 207,  503 => 206,  499 => 205,  494 => 202,  480 => 191,  474 => 188,  470 => 187,  466 => 185,  461 => 184,  457 => 182,  451 => 179,  447 => 178,  444 => 177,  438 => 176,  433 => 173,  427 => 170,  424 => 169,  417 => 165,  412 => 162,  406 => 159,  403 => 158,  399 => 157,  397 => 156,  393 => 154,  387 => 151,  384 => 150,  379 => 149,  375 => 147,  369 => 144,  366 => 143,  360 => 140,  354 => 137,  350 => 136,  346 => 135,  342 => 133,  337 => 132,  333 => 130,  326 => 127,  321 => 126,  317 => 124,  314 => 123,  308 => 121,  303 => 120,  297 => 119,  292 => 116,  286 => 113,  283 => 112,  278 => 111,  274 => 109,  268 => 106,  265 => 105,  259 => 102,  253 => 99,  250 => 98,  244 => 95,  238 => 92,  235 => 91,  229 => 88,  223 => 85,  220 => 84,  214 => 81,  208 => 78,  205 => 77,  199 => 74,  193 => 71,  190 => 70,  184 => 67,  178 => 64,  175 => 63,  169 => 60,  163 => 57,  160 => 56,  154 => 53,  148 => 50,  144 => 48,  140 => 47,  138 => 46,  134 => 44,  128 => 41,  125 => 40,  119 => 37,  115 => 35,  111 => 34,  105 => 32,  101 => 31,  97 => 30,  94 => 29,  88 => 26,  82 => 23,  78 => 22,  74 => 21,  70 => 19,  65 => 17,  58 => 13,  52 => 10,  48 => 8,  46 => 7,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/main.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/database/designer/main.twig");
    }
}
