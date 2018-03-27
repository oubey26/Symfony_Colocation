<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d83754fb641899e72c01647cfd480ccdd27b47f92e843ca0d45df935cfea2b7d extends Twig_Template
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
        $__internal_56f3143acb259f893e0094aaac726a33a440fd2fbe8ac7f23db458f5118cda8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f3143acb259f893e0094aaac726a33a440fd2fbe8ac7f23db458f5118cda8c->enter($__internal_56f3143acb259f893e0094aaac726a33a440fd2fbe8ac7f23db458f5118cda8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_058063d0c73716e561860c3e4a61fc3533eddbbdb01e33cea37478efa19989de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058063d0c73716e561860c3e4a61fc3533eddbbdb01e33cea37478efa19989de->enter($__internal_058063d0c73716e561860c3e4a61fc3533eddbbdb01e33cea37478efa19989de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_56f3143acb259f893e0094aaac726a33a440fd2fbe8ac7f23db458f5118cda8c->leave($__internal_56f3143acb259f893e0094aaac726a33a440fd2fbe8ac7f23db458f5118cda8c_prof);

        
        $__internal_058063d0c73716e561860c3e4a61fc3533eddbbdb01e33cea37478efa19989de->leave($__internal_058063d0c73716e561860c3e4a61fc3533eddbbdb01e33cea37478efa19989de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
