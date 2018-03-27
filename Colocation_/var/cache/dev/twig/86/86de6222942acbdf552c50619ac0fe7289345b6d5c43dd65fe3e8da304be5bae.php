<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e4715011153e1b3dd81ef872ac0a6f5a68fe4986151224090f33208202e54d70 extends Twig_Template
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
        $__internal_31c21105d034df4489b48c63fdfd7a3706df71d2812fac6aa1204b8ff157b9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c21105d034df4489b48c63fdfd7a3706df71d2812fac6aa1204b8ff157b9af->enter($__internal_31c21105d034df4489b48c63fdfd7a3706df71d2812fac6aa1204b8ff157b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_57dc29455fff4fa914cbffbf0656376b28401492b3187e555efd7444f7406d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dc29455fff4fa914cbffbf0656376b28401492b3187e555efd7444f7406d26->enter($__internal_57dc29455fff4fa914cbffbf0656376b28401492b3187e555efd7444f7406d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_31c21105d034df4489b48c63fdfd7a3706df71d2812fac6aa1204b8ff157b9af->leave($__internal_31c21105d034df4489b48c63fdfd7a3706df71d2812fac6aa1204b8ff157b9af_prof);

        
        $__internal_57dc29455fff4fa914cbffbf0656376b28401492b3187e555efd7444f7406d26->leave($__internal_57dc29455fff4fa914cbffbf0656376b28401492b3187e555efd7444f7406d26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
