<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_81ec9cd71b4fdbdbea7842c793765f7c6b901bc5275c6906e864551f17a49366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5dca2304ac49ede925b28ad96a697d1a2add5f26a8e735306ec7e6419d793b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dca2304ac49ede925b28ad96a697d1a2add5f26a8e735306ec7e6419d793b4->enter($__internal_c5dca2304ac49ede925b28ad96a697d1a2add5f26a8e735306ec7e6419d793b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3cb6f070937b49906b42d19de55ac4681113ef53b09a37d896fbfbf4d443489e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb6f070937b49906b42d19de55ac4681113ef53b09a37d896fbfbf4d443489e->enter($__internal_3cb6f070937b49906b42d19de55ac4681113ef53b09a37d896fbfbf4d443489e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c5dca2304ac49ede925b28ad96a697d1a2add5f26a8e735306ec7e6419d793b4->leave($__internal_c5dca2304ac49ede925b28ad96a697d1a2add5f26a8e735306ec7e6419d793b4_prof);

        
        $__internal_3cb6f070937b49906b42d19de55ac4681113ef53b09a37d896fbfbf4d443489e->leave($__internal_3cb6f070937b49906b42d19de55ac4681113ef53b09a37d896fbfbf4d443489e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
