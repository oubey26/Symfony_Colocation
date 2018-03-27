<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1aa89ca89cfc44e8fb4aa2c75b0e9612d7b29c3a416ccd7aa555f80ec837e50f extends Twig_Template
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
        $__internal_4a9050021ffd835412bc5b2cb10cf13ea15123dece6ba14461c75f9d2b60dc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9050021ffd835412bc5b2cb10cf13ea15123dece6ba14461c75f9d2b60dc5b->enter($__internal_4a9050021ffd835412bc5b2cb10cf13ea15123dece6ba14461c75f9d2b60dc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_03ef7b794fb74e334cc6009ea9e8610d5e48fe81a4d4c54379d55f4bc59496b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ef7b794fb74e334cc6009ea9e8610d5e48fe81a4d4c54379d55f4bc59496b1->enter($__internal_03ef7b794fb74e334cc6009ea9e8610d5e48fe81a4d4c54379d55f4bc59496b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4a9050021ffd835412bc5b2cb10cf13ea15123dece6ba14461c75f9d2b60dc5b->leave($__internal_4a9050021ffd835412bc5b2cb10cf13ea15123dece6ba14461c75f9d2b60dc5b_prof);

        
        $__internal_03ef7b794fb74e334cc6009ea9e8610d5e48fe81a4d4c54379d55f4bc59496b1->leave($__internal_03ef7b794fb74e334cc6009ea9e8610d5e48fe81a4d4c54379d55f4bc59496b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
