<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b6cf85b38b27a3a456af528d83a57c31b3a327a045922b6ec3dbe3375234e077 extends Twig_Template
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
        $__internal_153945d334c740c027a7079eb2552eea141e907d3982ef188715f51bcf3db786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153945d334c740c027a7079eb2552eea141e907d3982ef188715f51bcf3db786->enter($__internal_153945d334c740c027a7079eb2552eea141e907d3982ef188715f51bcf3db786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6c02c0c30951607f32d8754c1c3a1371f7519cb8fc43be3e3b9d39de2793849d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c02c0c30951607f32d8754c1c3a1371f7519cb8fc43be3e3b9d39de2793849d->enter($__internal_6c02c0c30951607f32d8754c1c3a1371f7519cb8fc43be3e3b9d39de2793849d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_153945d334c740c027a7079eb2552eea141e907d3982ef188715f51bcf3db786->leave($__internal_153945d334c740c027a7079eb2552eea141e907d3982ef188715f51bcf3db786_prof);

        
        $__internal_6c02c0c30951607f32d8754c1c3a1371f7519cb8fc43be3e3b9d39de2793849d->leave($__internal_6c02c0c30951607f32d8754c1c3a1371f7519cb8fc43be3e3b9d39de2793849d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
