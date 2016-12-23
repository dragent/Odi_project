<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_79872a86caae6c88ef221f8f3002920c3716de3a9c2239e67d147d2b4378b82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68b3b5d2a006836178aef5cbe5289aed8e026eeb78bf6cb8d793fb5c0427728a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b3b5d2a006836178aef5cbe5289aed8e026eeb78bf6cb8d793fb5c0427728a->enter($__internal_68b3b5d2a006836178aef5cbe5289aed8e026eeb78bf6cb8d793fb5c0427728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_68b3b5d2a006836178aef5cbe5289aed8e026eeb78bf6cb8d793fb5c0427728a->leave($__internal_68b3b5d2a006836178aef5cbe5289aed8e026eeb78bf6cb8d793fb5c0427728a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_412bbf124e051520f7a62fd06de81fd987a57fb78f2de192017be4c81906283c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412bbf124e051520f7a62fd06de81fd987a57fb78f2de192017be4c81906283c->enter($__internal_412bbf124e051520f7a62fd06de81fd987a57fb78f2de192017be4c81906283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_412bbf124e051520f7a62fd06de81fd987a57fb78f2de192017be4c81906283c->leave($__internal_412bbf124e051520f7a62fd06de81fd987a57fb78f2de192017be4c81906283c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ed91f9a3e3e04b687b2ebb6c18d46aaaf8d810720d299ec7c1de5d940d96c987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed91f9a3e3e04b687b2ebb6c18d46aaaf8d810720d299ec7c1de5d940d96c987->enter($__internal_ed91f9a3e3e04b687b2ebb6c18d46aaaf8d810720d299ec7c1de5d940d96c987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ed91f9a3e3e04b687b2ebb6c18d46aaaf8d810720d299ec7c1de5d940d96c987->leave($__internal_ed91f9a3e3e04b687b2ebb6c18d46aaaf8d810720d299ec7c1de5d940d96c987_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4d18a11cbd056af64c0d85e6b08fc56cf52a7c477e66aab66a21d8f6c3a4ddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d18a11cbd056af64c0d85e6b08fc56cf52a7c477e66aab66a21d8f6c3a4ddc5->enter($__internal_4d18a11cbd056af64c0d85e6b08fc56cf52a7c477e66aab66a21d8f6c3a4ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_4d18a11cbd056af64c0d85e6b08fc56cf52a7c477e66aab66a21d8f6c3a4ddc5->leave($__internal_4d18a11cbd056af64c0d85e6b08fc56cf52a7c477e66aab66a21d8f6c3a4ddc5_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2eaa40965c304c29ab7e663d9bee61c9ebe4ecc7fe404fa670d55a986f100ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaa40965c304c29ab7e663d9bee61c9ebe4ecc7fe404fa670d55a986f100ac1->enter($__internal_2eaa40965c304c29ab7e663d9bee61c9ebe4ecc7fe404fa670d55a986f100ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d4be2449fdbadff2a740b4319d4a14256510b3490f9219dd434fc08aa9853a8b = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_d90221ecb36ce1f936078ffd6cf33024748127e114b9f6cfc90b0af3ad5e9fff = "{{") && ('' === $__internal_d90221ecb36ce1f936078ffd6cf33024748127e114b9f6cfc90b0af3ad5e9fff || 0 === strpos($__internal_d4be2449fdbadff2a740b4319d4a14256510b3490f9219dd434fc08aa9853a8b, $__internal_d90221ecb36ce1f936078ffd6cf33024748127e114b9f6cfc90b0af3ad5e9fff)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_2eaa40965c304c29ab7e663d9bee61c9ebe4ecc7fe404fa670d55a986f100ac1->leave($__internal_2eaa40965c304c29ab7e663d9bee61c9ebe4ecc7fe404fa670d55a986f100ac1_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_743cdbde9a39073d3791ee7f4377372dadc10315922fc3aec57c0859720d73a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743cdbde9a39073d3791ee7f4377372dadc10315922fc3aec57c0859720d73a8->enter($__internal_743cdbde9a39073d3791ee7f4377372dadc10315922fc3aec57c0859720d73a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_743cdbde9a39073d3791ee7f4377372dadc10315922fc3aec57c0859720d73a8->leave($__internal_743cdbde9a39073d3791ee7f4377372dadc10315922fc3aec57c0859720d73a8_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0aa9323097d2c5450407504e746acdd2a1aaf1ac78d4b6c2cba63e5572820454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa9323097d2c5450407504e746acdd2a1aaf1ac78d4b6c2cba63e5572820454->enter($__internal_0aa9323097d2c5450407504e746acdd2a1aaf1ac78d4b6c2cba63e5572820454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_0aa9323097d2c5450407504e746acdd2a1aaf1ac78d4b6c2cba63e5572820454->leave($__internal_0aa9323097d2c5450407504e746acdd2a1aaf1ac78d4b6c2cba63e5572820454_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e7f2617879076cba0af1a6f0e3c84e2e5beb4f58d48b36747357ca0c6399d931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2617879076cba0af1a6f0e3c84e2e5beb4f58d48b36747357ca0c6399d931->enter($__internal_e7f2617879076cba0af1a6f0e3c84e2e5beb4f58d48b36747357ca0c6399d931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_e7f2617879076cba0af1a6f0e3c84e2e5beb4f58d48b36747357ca0c6399d931->leave($__internal_e7f2617879076cba0af1a6f0e3c84e2e5beb4f58d48b36747357ca0c6399d931_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_e354e63cc753b953ad2e9604849bd22150a196f110b1ccb8842179505ae9b5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e354e63cc753b953ad2e9604849bd22150a196f110b1ccb8842179505ae9b5b0->enter($__internal_e354e63cc753b953ad2e9604849bd22150a196f110b1ccb8842179505ae9b5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_e354e63cc753b953ad2e9604849bd22150a196f110b1ccb8842179505ae9b5b0->leave($__internal_e354e63cc753b953ad2e9604849bd22150a196f110b1ccb8842179505ae9b5b0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_3f1eb2a6529b010bbbc0e5ffc0c8ee439140ba0dea1d100f3af62e605782718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1eb2a6529b010bbbc0e5ffc0c8ee439140ba0dea1d100f3af62e605782718a->enter($__internal_3f1eb2a6529b010bbbc0e5ffc0c8ee439140ba0dea1d100f3af62e605782718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_3f1eb2a6529b010bbbc0e5ffc0c8ee439140ba0dea1d100f3af62e605782718a->leave($__internal_3f1eb2a6529b010bbbc0e5ffc0c8ee439140ba0dea1d100f3af62e605782718a_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0e9efdc11f39fd3ef97f2cc91158aa9f77ce49085ad5ca249a876b805dbb1a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9efdc11f39fd3ef97f2cc91158aa9f77ce49085ad5ca249a876b805dbb1a5f->enter($__internal_0e9efdc11f39fd3ef97f2cc91158aa9f77ce49085ad5ca249a876b805dbb1a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0e9efdc11f39fd3ef97f2cc91158aa9f77ce49085ad5ca249a876b805dbb1a5f->leave($__internal_0e9efdc11f39fd3ef97f2cc91158aa9f77ce49085ad5ca249a876b805dbb1a5f_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1077dafabb73b1319c2008884a1d803efc80255c7ae3b861ca3dfc4a82ac1d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1077dafabb73b1319c2008884a1d803efc80255c7ae3b861ca3dfc4a82ac1d48->enter($__internal_1077dafabb73b1319c2008884a1d803efc80255c7ae3b861ca3dfc4a82ac1d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_1077dafabb73b1319c2008884a1d803efc80255c7ae3b861ca3dfc4a82ac1d48->leave($__internal_1077dafabb73b1319c2008884a1d803efc80255c7ae3b861ca3dfc4a82ac1d48_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e1543a8385fd0cbba44eecb7325d6d51361be44723965970a0b3072a22e62c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1543a8385fd0cbba44eecb7325d6d51361be44723965970a0b3072a22e62c3b->enter($__internal_e1543a8385fd0cbba44eecb7325d6d51361be44723965970a0b3072a22e62c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_e1543a8385fd0cbba44eecb7325d6d51361be44723965970a0b3072a22e62c3b->leave($__internal_e1543a8385fd0cbba44eecb7325d6d51361be44723965970a0b3072a22e62c3b_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_53668249168ceaee9f3d849c0325812450d5d68c9e45e928aa83df21f1285330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53668249168ceaee9f3d849c0325812450d5d68c9e45e928aa83df21f1285330->enter($__internal_53668249168ceaee9f3d849c0325812450d5d68c9e45e928aa83df21f1285330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_53668249168ceaee9f3d849c0325812450d5d68c9e45e928aa83df21f1285330->leave($__internal_53668249168ceaee9f3d849c0325812450d5d68c9e45e928aa83df21f1285330_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8237ef92d9225e436cc0542c35874d417617a08d9135a332f70941e4c6ce6a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237ef92d9225e436cc0542c35874d417617a08d9135a332f70941e4c6ce6a88->enter($__internal_8237ef92d9225e436cc0542c35874d417617a08d9135a332f70941e4c6ce6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8237ef92d9225e436cc0542c35874d417617a08d9135a332f70941e4c6ce6a88->leave($__internal_8237ef92d9225e436cc0542c35874d417617a08d9135a332f70941e4c6ce6a88_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5b85adcfe0eb055165283dd659dbfee3356d486978413ce8ed8b8433219cb6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b85adcfe0eb055165283dd659dbfee3356d486978413ce8ed8b8433219cb6be->enter($__internal_5b85adcfe0eb055165283dd659dbfee3356d486978413ce8ed8b8433219cb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_5b85adcfe0eb055165283dd659dbfee3356d486978413ce8ed8b8433219cb6be->leave($__internal_5b85adcfe0eb055165283dd659dbfee3356d486978413ce8ed8b8433219cb6be_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_608fb1901425cf6e3e9323189b616f7f8e4e0d851d20fa2325ead9916e2b38ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608fb1901425cf6e3e9323189b616f7f8e4e0d851d20fa2325ead9916e2b38ee->enter($__internal_608fb1901425cf6e3e9323189b616f7f8e4e0d851d20fa2325ead9916e2b38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_608fb1901425cf6e3e9323189b616f7f8e4e0d851d20fa2325ead9916e2b38ee->leave($__internal_608fb1901425cf6e3e9323189b616f7f8e4e0d851d20fa2325ead9916e2b38ee_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_397c92a9c2616813b39921c76b5da9cb6df7019ae811ebd60ec43455116e8e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397c92a9c2616813b39921c76b5da9cb6df7019ae811ebd60ec43455116e8e87->enter($__internal_397c92a9c2616813b39921c76b5da9cb6df7019ae811ebd60ec43455116e8e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_397c92a9c2616813b39921c76b5da9cb6df7019ae811ebd60ec43455116e8e87->leave($__internal_397c92a9c2616813b39921c76b5da9cb6df7019ae811ebd60ec43455116e8e87_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4dbc01bb430379908dd33cbf03589dab3ce517adb8182159f39a429dd1db6999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbc01bb430379908dd33cbf03589dab3ce517adb8182159f39a429dd1db6999->enter($__internal_4dbc01bb430379908dd33cbf03589dab3ce517adb8182159f39a429dd1db6999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 190
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_4dbc01bb430379908dd33cbf03589dab3ce517adb8182159f39a429dd1db6999->leave($__internal_4dbc01bb430379908dd33cbf03589dab3ce517adb8182159f39a429dd1db6999_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_53cb9c209f9203877384d1ed17923f525f95d4259f16fe66794266723fddfe2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cb9c209f9203877384d1ed17923f525f95d4259f16fe66794266723fddfe2b->enter($__internal_53cb9c209f9203877384d1ed17923f525f95d4259f16fe66794266723fddfe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_53cb9c209f9203877384d1ed17923f525f95d4259f16fe66794266723fddfe2b->leave($__internal_53cb9c209f9203877384d1ed17923f525f95d4259f16fe66794266723fddfe2b_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a2660d5d392beb6cf9861ce08315b44492c5b134eac23090316a610ffb441675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2660d5d392beb6cf9861ce08315b44492c5b134eac23090316a610ffb441675->enter($__internal_a2660d5d392beb6cf9861ce08315b44492c5b134eac23090316a610ffb441675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_a2660d5d392beb6cf9861ce08315b44492c5b134eac23090316a610ffb441675->leave($__internal_a2660d5d392beb6cf9861ce08315b44492c5b134eac23090316a610ffb441675_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_711c7658665ba7a808546b081820ccc889d1a98e555fb735906e10936d2463f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711c7658665ba7a808546b081820ccc889d1a98e555fb735906e10936d2463f7->enter($__internal_711c7658665ba7a808546b081820ccc889d1a98e555fb735906e10936d2463f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_711c7658665ba7a808546b081820ccc889d1a98e555fb735906e10936d2463f7->leave($__internal_711c7658665ba7a808546b081820ccc889d1a98e555fb735906e10936d2463f7_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d1c04b08a000ae123c9fc0a3539c00194d02e885123f8f8f1273baa07b2c0459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c04b08a000ae123c9fc0a3539c00194d02e885123f8f8f1273baa07b2c0459->enter($__internal_d1c04b08a000ae123c9fc0a3539c00194d02e885123f8f8f1273baa07b2c0459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d1c04b08a000ae123c9fc0a3539c00194d02e885123f8f8f1273baa07b2c0459->leave($__internal_d1c04b08a000ae123c9fc0a3539c00194d02e885123f8f8f1273baa07b2c0459_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_514de113af0a474641cbbd8dedd8a268e4ee689c484099b6b124ff14f0f0254a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514de113af0a474641cbbd8dedd8a268e4ee689c484099b6b124ff14f0f0254a->enter($__internal_514de113af0a474641cbbd8dedd8a268e4ee689c484099b6b124ff14f0f0254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_514de113af0a474641cbbd8dedd8a268e4ee689c484099b6b124ff14f0f0254a->leave($__internal_514de113af0a474641cbbd8dedd8a268e4ee689c484099b6b124ff14f0f0254a_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_96823502df36fd46c801aee8c64756ecff18cbc084984cd2f95d2944ba133002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96823502df36fd46c801aee8c64756ecff18cbc084984cd2f95d2944ba133002->enter($__internal_96823502df36fd46c801aee8c64756ecff18cbc084984cd2f95d2944ba133002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_96823502df36fd46c801aee8c64756ecff18cbc084984cd2f95d2944ba133002->leave($__internal_96823502df36fd46c801aee8c64756ecff18cbc084984cd2f95d2944ba133002_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d73f8ce0ff937ad927fed88ef580150edcd69ae5dccf39adbfa3ff98ce36980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73f8ce0ff937ad927fed88ef580150edcd69ae5dccf39adbfa3ff98ce36980f->enter($__internal_d73f8ce0ff937ad927fed88ef580150edcd69ae5dccf39adbfa3ff98ce36980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_d73f8ce0ff937ad927fed88ef580150edcd69ae5dccf39adbfa3ff98ce36980f->leave($__internal_d73f8ce0ff937ad927fed88ef580150edcd69ae5dccf39adbfa3ff98ce36980f_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_48d29d91bab717cfc1414021e986b8c325e8eb04a4b9e575c6ad7c0da2569b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d29d91bab717cfc1414021e986b8c325e8eb04a4b9e575c6ad7c0da2569b30->enter($__internal_48d29d91bab717cfc1414021e986b8c325e8eb04a4b9e575c6ad7c0da2569b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_48d29d91bab717cfc1414021e986b8c325e8eb04a4b9e575c6ad7c0da2569b30->leave($__internal_48d29d91bab717cfc1414021e986b8c325e8eb04a4b9e575c6ad7c0da2569b30_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_95c2ba06767a99c08639ddd31f9a92e6ee4717270ced6b5195ec38e695613e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c2ba06767a99c08639ddd31f9a92e6ee4717270ced6b5195ec38e695613e99->enter($__internal_95c2ba06767a99c08639ddd31f9a92e6ee4717270ced6b5195ec38e695613e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_95c2ba06767a99c08639ddd31f9a92e6ee4717270ced6b5195ec38e695613e99->leave($__internal_95c2ba06767a99c08639ddd31f9a92e6ee4717270ced6b5195ec38e695613e99_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  896 => 262,  893 => 261,  885 => 259,  881 => 258,  879 => 257,  873 => 256,  871 => 255,  865 => 254,  858 => 249,  856 => 248,  854 => 247,  848 => 246,  842 => 245,  835 => 242,  833 => 241,  831 => 240,  825 => 239,  819 => 238,  812 => 235,  810 => 234,  804 => 233,  797 => 230,  795 => 229,  789 => 228,  782 => 225,  780 => 224,  774 => 223,  767 => 220,  765 => 219,  759 => 218,  752 => 215,  750 => 214,  748 => 213,  742 => 212,  735 => 209,  733 => 208,  731 => 207,  729 => 206,  723 => 205,  717 => 204,  708 => 198,  704 => 197,  689 => 196,  685 => 193,  682 => 190,  681 => 189,  680 => 188,  678 => 187,  675 => 186,  672 => 185,  669 => 184,  666 => 183,  663 => 182,  660 => 181,  657 => 180,  654 => 179,  652 => 178,  646 => 177,  639 => 174,  633 => 173,  626 => 170,  620 => 169,  613 => 166,  611 => 165,  605 => 163,  598 => 160,  596 => 159,  590 => 158,  582 => 152,  580 => 151,  578 => 150,  575 => 148,  573 => 147,  571 => 146,  565 => 145,  557 => 141,  555 => 140,  553 => 139,  550 => 137,  548 => 136,  546 => 135,  540 => 134,  532 => 130,  526 => 127,  525 => 126,  524 => 125,  520 => 124,  516 => 123,  509 => 119,  508 => 118,  507 => 117,  503 => 116,  501 => 115,  495 => 114,  488 => 111,  486 => 110,  480 => 109,  472 => 105,  468 => 104,  464 => 103,  460 => 102,  456 => 101,  452 => 100,  448 => 99,  444 => 98,  440 => 97,  438 => 96,  434 => 95,  432 => 94,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 254,  197 => 253,  194 => 251,  192 => 245,  189 => 244,  187 => 238,  184 => 237,  182 => 233,  179 => 232,  177 => 228,  174 => 227,  172 => 223,  169 => 222,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 204,  154 => 203,  151 => 201,  149 => 177,  146 => 176,  144 => 173,  141 => 172,  139 => 169,  136 => 168,  134 => 163,  131 => 162,  129 => 158,  126 => 157,  123 => 155,  121 => 145,  118 => 144,  116 => 134,  113 => 133,  111 => 114,  108 => 113,  106 => 109,  104 => 90,  102 => 75,  99 => 74,  97 => 56,  94 => 55,  92 => 42,  89 => 41,  87 => 35,  84 => 34,  82 => 22,  79 => 21,  77 => 17,  74 => 16,  72 => 12,  69 => 11,  67 => 5,  64 => 4,  61 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\Projet_ODI\\projet_odi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
