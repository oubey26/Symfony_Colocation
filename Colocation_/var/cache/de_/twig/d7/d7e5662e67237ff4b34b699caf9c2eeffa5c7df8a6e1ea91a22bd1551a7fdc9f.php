<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_27a56e879ef3f1ccc3d1e2f8f36c66777081fa5b93e4b6a8f2dee9b89e84ed17 extends Twig_Template
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
        $__internal_d159f41a43089aaf24310f51b567bd4eeb89646ee1772e02f7f199ff17821b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d159f41a43089aaf24310f51b567bd4eeb89646ee1772e02f7f199ff17821b0b->enter($__internal_d159f41a43089aaf24310f51b567bd4eeb89646ee1772e02f7f199ff17821b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_79e4c5548bf220462aad9eb9660316c7c835aac73df6fb98c84bd89e5e76b83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e4c5548bf220462aad9eb9660316c7c835aac73df6fb98c84bd89e5e76b83b->enter($__internal_79e4c5548bf220462aad9eb9660316c7c835aac73df6fb98c84bd89e5e76b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d159f41a43089aaf24310f51b567bd4eeb89646ee1772e02f7f199ff17821b0b->leave($__internal_d159f41a43089aaf24310f51b567bd4eeb89646ee1772e02f7f199ff17821b0b_prof);

        
        $__internal_79e4c5548bf220462aad9eb9660316c7c835aac73df6fb98c84bd89e5e76b83b->leave($__internal_79e4c5548bf220462aad9eb9660316c7c835aac73df6fb98c84bd89e5e76b83b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
